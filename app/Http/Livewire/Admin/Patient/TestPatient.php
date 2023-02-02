<?php

namespace App\Http\Livewire\Admin\Patient;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class TestPatient extends ModalComponent
{
    public static function modalMaxWidth(): string
{
    return '7xl';
}

public static function closeModalOnEscape(): bool
{
    return false;
}
    public function render()
    {
        return view('livewire.admin.patient.test-patient');
    }
}
