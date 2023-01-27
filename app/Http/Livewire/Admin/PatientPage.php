<?php

namespace App\Http\Livewire\Admin;

use App\Models\Patient;
use Livewire\Component;

class PatientPage extends Component
{
    public $search = '';



    public function render()
    {
        $patients = Patient::paginate(25);
        return view('livewire.admin.patient-page', compact('patients'));
    }
}
