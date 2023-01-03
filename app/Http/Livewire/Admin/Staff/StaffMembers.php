<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\User;
use Livewire\Component;

class StaffMembers extends Component
{
    public function render()
    {
        return view('livewire.admin.staff.staff-members', ['users' => User::paginate(7)]);
    }
}
