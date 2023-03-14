<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{

    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $selected = [];
    public $message ='Delete';
    public $selectAllCheckboxes = false;
    public $selectPage = false;
    public User $user;
    public $checked = "";
    public $selectCheckbox = [];
    public $selectAllVisible = false;


    public function selectedValue(){
        // Get the selected values to display in delete-confirmation modal

        if (!empty($this->selected)) {

            foreach ($this->selected as $id) {

                $deleting = User::find(['id' => $id])->pluck('full_name')->first();
                // return $deleting;
                dd($deleting);
            }

        }

    }
    public function updatedselectAllVisible($value) {
        // dd($value);
        if ($value) {
            # code...
            $selected = User::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            ->simplePaginate($this->perPage);
            dd($selected);
        }
    }


    public function callFunction()
    {
        $this->message = "You clicked on button";
    }

    public function deleteUser() {

        if(count($this->selected) > 0) {
            foreach($this->selected as $id)
            {
                $user = User::where('id', $id)->first();
                $user->articles->each->delete();
                $user->profile->delete();
                $user->delete();
            }
            $this->selected = [];
        }
        $this->selected = [];

    }

    public function mount() {
        // $this->search = '';
        // $this->users = '';
    }

    public function resetFilters()
    {
        // reset properties to null
        // $this->reset(['search', 'users', 'selected']);

        $this->search = '';

    }
    public function render()
    {
        $users = User::search($this->search)
        ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        ->paginate($this->perPage);

        return view('livewire.users-table', [
                'users' => $users,
        ]);
    }

}
