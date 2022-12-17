<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class StaffMembers extends Component
{
    public User $user;

    public function render()
    {
        $users = User::all();
        return view('livewire.admin.staff-members', [
            'users' => $users
        ]);
    }
}
