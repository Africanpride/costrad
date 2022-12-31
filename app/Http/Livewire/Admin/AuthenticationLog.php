<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Jenssegers\Agent\Agent;
use Illuminate\Database\Eloquent\Builder;
use JamesMills\LaravelTimezone\Facades\Timezone;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog as Log;



class AuthenticationLog extends DataTableComponent
{
    public ?string $defaultSortColumn = 'login_at';
    public string $defaultSortDirection = 'desc';
    public string $tableName = 'authentication-log-table';

    public User $user;
    public $model = Log::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function getUserEmail($id)
    {
        return User::where('id', $id)->first();
    }

    public function mount(User $user)
    {
        // if (! auth()->user() || ! auth()->user()->isAdmin()) {
        //     $this->redirectRoute('frontend.index');
        // }

        $this->user = $user;
    }

    public function columns(): array
    {
        return [
            Column::make('Email', 'authenticatable_id')
                ->sortable()
                ->format(fn ($value) => User::where('id', $value)->pluck('email')->first())
                ->searchable(),
            Column::make('IP Address', ' ip_address')
                ->searchable(),
            /*             Column::make('Browser', 'user_agent')
                ->searchable()
                ->format(function($value) {
                    $agent = tap(new Agent, fn($agent) => $agent->setUserAgent($value));
                    return $agent->platform() . ' - ' . $agent->browser();
                }), */
            // Column::make('Location')
            //     ->searchable(function (Builder $query, $searchTerm) {
            //         $query->orWhere('location->city', 'like', '%'.$searchTerm.'%')
            //             ->orWhere('location->state', 'like', '%'.$searchTerm.'%')
            //             ->orWhere('location->state_name', 'like', '%'.$searchTerm.'%')
            //             ->orWhere('location->postal_code', 'like', '%'.$searchTerm.'%');
            //     })
            //     ->format(fn ($value) => $value && $value['default'] === false ? $value['city'] . ', ' . $value['state'] : '-'),
            Column::make('Login At')
                ->sortable()
                ->format(fn ($value) => $value ? Timezone::convertToLocal($value) : '-'),
            Column::make('Logout At')
                ->sortable()
                ->format(fn ($value) => $value ? Timezone::convertToLocal($value) : '-'),
            Column::make('Login Successful')
                ->sortable()
                ->format(fn ($value) => $value === true ? 'Yes' : 'No'),

        ];
    }

    public function query(): Builder
    {
        return Log::query()
            ->where('authenticatable_type', User::class)
            ->where('authenticatable_id', $this->user->id);
    }
}
