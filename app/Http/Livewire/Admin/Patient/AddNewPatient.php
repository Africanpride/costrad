<?php

namespace App\Http\Livewire\Admin\Patient;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddNewPatient extends Component
{
    use WithFileUploads;

    public $title;
    public $gender;
    public $DOB;
    public $firstName;
    public $lastName;
    public $email;
    public $address_1;
    public $address_2;
    public $telephone;
    public $emergencyContactName;
    public $emergencyContactTelephone;
    public $nationality;
    public $insurance_id;
    public bool $insured = false;
    public bool $active = false;
    public $avatar;

    protected $listeners = ['avatar' => '$refresh'];


    protected $rules = [
        'title' => ['nullable', 'string', 'min:3', 'max:255'],
        'gender' => ['nullable', 'string', 'min:3', 'max:255'],
        'DOB' => ['nullable', 'string', 'min:3', 'max:255'],
        'firstName' => ['required', 'string', 'min:3', 'max:255'],
        'lastName' => ['required', 'string', 'min:3', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'address_1' => ['nullable', 'string', 'min:3', 'max:255'],
        'address_2' => ['nullable', 'string', 'min:3', 'max:255'],
        'emergencyContactName' => ['nullable', 'string', 'min:3', 'max:255'],
        'emergencyContactTelephone' => ['nullable', 'string', 'min:3', 'max:255'],
        'nationality' => ['nullable', 'string', 'min:3', 'max:255'],
        'insurance_id' => ['nullable', 'string', 'min:3', 'max:255'],
        'insured' => ['required', 'boolean'],
        'active' => ['required', 'boolean'],
        'avatar' => ['nullable','image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
    ];



    public function addPatient() {

        dd('we are  hitting backend');
        $data = $this->validate();
        if ($this->avatar) {
            $imageName = $this->avatar->store("avatar", 'public');
            $data['avatar'] = $imageName;
        }
        Patient::create(array_filter($data));
        return redirect()->to('patients');
    }



    public function render()
    {
        return view('livewire.admin.patient.add-new-patient');
    }
}
