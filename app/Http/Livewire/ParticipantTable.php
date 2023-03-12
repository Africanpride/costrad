<?php

namespace App\Http\Livewire;

use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class ParticipantTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            ImageColumn::make('Avatar')
                ->location(function ($row) {
                    // return $row->profile_photo_url;
                })
                ->attributes(function ($row) {
                    return [
                        'class' => 'w-8 h-8 rounded-full',
                    ];
                }),
            // ImageColumn::make('Avatar')
            //     ->location(function ($row) {
            //         return asset('img/logo-' . $row->id . '.png');
            //     })
            //     ->attributes(function ($row) {
            //         return [
            //             'class' => 'w-8 h-8 rounded-full',
            //         ];
            //     }),

            // Column::make('Name')
            //     ->format(
            //         fn ($value, $row, Column $column) => $row->firstName . ' ' . $row->lastName),

            Column::make("Social avatar", "social_avatar")
                ->sortable(),

            Column::make("email", "Email")->sortable()->searchable(),
            Column::make("Email verified at", "email_verified_at")->sortable(),
            BooleanColumn::make("active", "active")->sortable(),
            BooleanColumn::make("Participant", "participant")->sortable(),
            BooleanColumn::make("Staff", "staff")->sortable(),
            BooleanColumn::make("Must create password", "must_create_password")->sortable(),
            Column::make("Created at", "created_at")->sortable(),
            Column::make("Updated at", "updated_at")->sortable(),
        ];
    }
}
