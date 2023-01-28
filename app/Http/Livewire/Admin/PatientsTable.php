<?php

namespace App\Http\Livewire\Admin;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientsTable extends Component
{
    use WithPagination;
    public $search = '';
    public $searchTerm = '';



    public function render()
    {
        $patients = Patient::whereLike(['firstName', 'lastName', 'email', 'telephone'], $this->search)->paginate(10);
        return view('livewire.admin.patients-table', compact('patients'));
    }
}
