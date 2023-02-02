<?php

namespace App\Http\Livewire\Admin\Patient;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdatePatient extends Component
{
    use WithFileUploads;

    public $titleOptions = ['Mr', 'Ms', 'Mrs', 'Dr'];
    public $genderOptions = ['Male', 'Female'];
    public $insuranceOptions;
    public $searchInsurance = '';
    public $title = '';
    public $gender;
    public $dateOfBirth;
    public $firstName;
    public $lastName;
    public $email;
    public $address_1;
    public $address_2;
    public $city;
    public $state;
    public $zipcode;
    public $country;
    public $telephone;
    public $emergencyContactName;
    public $emergencyContactTelephone;
    public $nationality;
    public $insurance_id;
    public bool $insured = false;
    public bool $active = false;
    public $avatar;

    public Patient $patient;
//
    public function mount(Patient $patient)
    {
        $this->patient = $patient;

    }

    protected $listeners = ['updatePatient'];


    public function updatePatient(Patient $patient)
    {

        dd($patient);
        // $this->patient = Patient::findOrFail($patientId);
        // or alternatively
        // $this->patient = Patient::whereId($patientId)->firstOrFail();
    }

    protected $rules = [
        'title' => ['nullable', 'string', 'min:1', 'max:3'],
        'gender' => ['nullable', 'string', 'min:1', 'max:255'],
        'dateOfBirth' => ['nullable', 'string', 'min:3', 'max:255'],
        'firstName' => ['required', 'string', 'min:2', 'max:255'],
        'lastName' => ['required', 'string', 'min:2', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:patients'],
        'address_1' => ['nullable', 'string', 'min:2', 'max:255'],
        'address_2' => ['nullable', 'string', 'min:2', 'max:255'],
        'city' => ['nullable', 'string', 'min:2', 'max:255'],
        'state' => ['nullable', 'string', 'min:2', 'max:255'],
        'zipcode' => ['nullable', 'string', 'min:2', 'max:255'],
        'country' => ['nullable', 'string', 'min:2', 'max:255'],
        'emergencyContactName' => ['nullable', 'string', 'min:3', 'max:255'],
        'emergencyContactTelephone' => ['nullable', 'string', 'min:3', 'max:255'],
        'nationality' => ['nullable', 'string', 'min:1', 'max:255'],
        'insurance_id' => ['nullable', 'string', 'min:1', 'max:255'],
        'insured' => ['required', 'boolean'],
        'active' => ['required', 'boolean'],
        'avatar' => ['nullable', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
    ];

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function render()
    {
        return view('livewire.admin.patient.update-patient', [
            'patient' => $this->patient
        ]);
    }
}
