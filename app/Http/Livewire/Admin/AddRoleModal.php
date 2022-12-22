<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use Livewire\Component;
use App\Models\Permission;

class AddRoleModal extends Component
{

    public function render()
    {
        return view('livewire.admin.add-role-modal');
    }
}
