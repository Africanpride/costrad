<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\Role;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class UpdateStaff extends ModalComponent
{
    public User $user;
    public Role $role;
    public $firstName;
    public $LastName;
    public $email;
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


    public function updateStaff()
    {
        $validated = $this->validate([
            'firstName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'email' => 'unique:users,email,'.$this->user->id,
        ]);
        // dd($this->rolePermissions);
        $this->user->update($validated);
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
