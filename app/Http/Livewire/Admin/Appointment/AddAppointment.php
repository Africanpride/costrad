<?php

namespace App\Http\Livewire\Admin\Appointment;

use App\Models\User;
use App\Models\Patient;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class AddAppointment extends ModalComponent
{
    public $appointment_date;
    public $appointment_time;
    public ?string $appointment_reason;
    public ?bool $active = false;
    public ?bool $priority = false;
    public ?string $patient_id;
    public ?string $staff_id;
    public $searchTerms = '';
    public $patientOptions = [];

    public Patient $patient;

    public function mount()
    {
        $this->staff_id = Auth::user()->id;
        // $this->patientOptions = Patient::whereLike(['firstName', 'lastName', 'email', 'telephone','insuranceNumber'], $this->searchTerms)->orderByDesc('created_at')->get();

        $this->patientOptions = Patient::all();

    }

    public function chosenPatient()
    {
        return Patient::where('full_name', 'LIKE', "%{$this->search}%")->get();
    }

    public function saveAppointment()
    {
        $validatedData = $this->validate([
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'appointment_reason' => 'nullable',
            'active' => 'nullable',
            'priority' => 'nullable',
            'patient_id' => 'required',
            'staff_id' => 'required',
        ]);


        dd($validatedData);
        Appointment::create([
            'appointment_date' => $this->appointment_date,
            'appointment_time' => $this->appointment_time,
            'appointment_reason' => $this->appointment_reason,
            'patient_id' => $this->patient_id,
            'active' => $this->active,
            'priority' => $this->priority,
            'user_id' => $this->staff_id,
        ]);

        session()->flash('message', 'Appointment created successfully.');
        $this->forceClose()->closeModal();
    }

    private function resetInputFields()
    {
        $this->appointment_date = null;
        $this->appointment_time = null;
        $this->appointment_reason = null;
        $this->active = null;
        $this->priority = null;
        $this->patient_id = null;
        $this->staff_id = null;
    }

    public function render()
    {
        $patients = Patient::all();
        $staff = User::all();

        return view(

            'livewire.admin.appointment.add-appointment',
            [
                'patients' => $patients,
                'staff' => $staff,
            ]
        );
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public static function closeModalOnClickAway(): bool
    {
        return false;
    }
}
