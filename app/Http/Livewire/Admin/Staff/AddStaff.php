<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;



class AddStaff extends ModalComponent
{
    // use PasswordValidationRules;

    public $firstName, $lastName, $email, $password, $availableRoles, $roles = [];
    // public Role $role;

    // public function mount()
    // {
    //     $this->firstName = $firstName;
    //     $this->availableRoles = Role::all(); // we shall check against this
    // }


    protected $rules = [
        'firstName' => ['required', 'string', 'min:2', 'max:255'],
        'lastName' => ['required', 'string', 'min:2', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required']
    ];


    public function addStaff()
    {

        // dd($this->roles);

        $this->validate();
        $staff =  User::create(
            [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]
        );
        $staff->syncRoles($this->roles);


        return redirect()->to('/staff');
    }

    public function render()
    {
        return view('livewire.admin.staff.add-staff');
    }
}
