<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminRoles extends Component
{
    public function render()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('livewire.admin.admin-roles', compact('roles', 'permissions'));
    }
}
