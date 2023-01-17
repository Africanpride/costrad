<?php

namespace App\Http\Livewire\Admin\Insurance;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class InsuranceCrud extends ModalComponent
{

    public $name, $address, $telephone_1, $telephone_2, $telephone_3, $country, $email, $percentage, $logo;

    public function render()
    {
        return view('livewire.admin.insurance.insurance-crud');
    }
}
