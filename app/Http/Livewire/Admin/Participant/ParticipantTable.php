<?php

namespace App\Http\Livewire\Admin\Participant;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ParticipantTable extends Component
{

    use WithPagination;

    public $perPage = 5;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $selected = [];
    public $message ='Delete';
    public $selectAllCheckboxes = false;
    public $selectPage = false;
    public User $user;
    // public $users;
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
            ->paginate($this->perPage);
            // dd($selected);
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
        // $this->users = '';

    }
    public function render()
    {
        $userss = User::search($this->search)->with('profile')
        ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        ->paginate($this->perPage);

        $users = User::participant()->paginate(5);

        return view('livewire.admin.participant.participant-table', compact('users'));
    }
}
