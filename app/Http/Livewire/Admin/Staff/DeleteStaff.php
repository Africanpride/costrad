<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteStaff extends ModalComponent
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function deleteStaff()
    {
        $this->user->delete();
        return redirect()->to('/staff');
    }

    public function render()
    {
        return view('livewire.admin.staff.delete-staff');
    }
}
