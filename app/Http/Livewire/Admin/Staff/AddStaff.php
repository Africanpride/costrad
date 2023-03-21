<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use App\Traits\PasswordResetNotification;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;


class AddStaff extends ModalComponent
{
    use PasswordResetNotification;
    public $firstName, $lastName, $email, $password, $availableRoles, $roles = [];
    public bool $resetPassword = false;
    public bool $active = false;



    protected $rules = [
        'firstName' => ['required', 'string', 'min:2', 'max:255'],
        'lastName' => ['required', 'string', 'min:2', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'active' => 'required|boolean',
        'resetPassword' => 'required|boolean',
        'password' => ['sometimes']
    ];

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public static function closeModalOnClickAway(): bool
    {
        return false;
    }
    public function addStaff()
    {
        $data = $this->validate();

        // persist data

        $user = User::create($data);
        // set password
        $user->forceFill([
            'password' => Hash::make($this->password),
            'must_create_password' => false,
            'staff' => true
        ])->save();

        // send reset password
        if ($this->resetPassword) {
            $this->sendPasswordResetLink($this->email);
        }

        $user->profile()->create([
            'bio' => 'We want to know more about you - update your bio once and showcase your unique story.'
        ]);

        $user->syncRoles($this->roles);
        return redirect()->to('admin/staff');
    }

    public function render()
    {
        return view('livewire.admin.staff.add-staff');
    }
}
