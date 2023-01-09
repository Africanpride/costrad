<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Contracts\Validation\Rule;

class UpdateStaff extends ModalComponent
{
    public User $user;
    public Role $role;
    public $firstName;
    public $lastName;
    public $email;
    public $roles;
    public $password;
    public $avatar;
    public array $staffRoles = [];

    public function mount(User $user)
    {
        $this->user         = $user;
        $this->firstName    = $user->firstName;
        $this->lastName     = $user->lastName;
        $this->email        = $user->email;
        $this->avatar       = $user->avatar_url;
        $this->staffRoles   = $user->roles->pluck('id')->toArray();
        $this->roles = Role::all(); // we shall check against this
    }

    // protected $rules = [

    //     'firstName' => 'required|string|min:2|max:255',
    //     'lastName' => 'required|string|min:2|max:255',
    //     'email' => 'unique:users,email,'. $this->user->email,
    //     // 'password' => 'required'
    // ];

    public function updateStaff()
    {
        $this->validate([
            'firstName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'email' => 'required|unique:users,email,'.$this->user->id,
        ]);

        $this->user->update(
            [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]
        );

        $this->user->syncRoles($this->staffRoles);
        // alert/Toast to show success
        return redirect()->to('/staff/');
    }
    public function deleteStaff(User $user)
    {
        $this->user->delete();
        // alert/Toast to show success
        return redirect()->to('/staff');
    }


    public function render()
    {
        return view('livewire.admin.staff.update-staff');
    }
}
