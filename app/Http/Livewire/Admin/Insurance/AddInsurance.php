<?php

namespace App\Http\Livewire\Admin\Insurance;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddInsurance extends ModalComponent
{
    public $name, $address, $telephone_1, $telephone_2, $telephone_3, $country, $email, $percentage, $logo;

    protected $rules = [
        'name' => ['required', 'string', 'min:3', 'max:255', 'unique:roles'],
        'address' => ['nullable', 'string', 'min:3', 'max:255'],
        'telephone_1' => ['nullable', 'string', 'min:3', 'max:255'],
        'telephone_2' => ['nullable', 'string', 'min:3', 'max:255'],
        'telephone_3' => ['nullable', 'string', 'min:3', 'max:255'],
        'country' => ['nullable', 'string', 'min:3', 'max:255'],
        'percentage' => ['email', 'string', 'min:3', 'max:255'],
        'logo' => ['string', 'min:3', 'max:255'],
        'email' => ['email', 'string', 'min:3', 'max:255'],
    ];

    public function addInsurance() {
        dd($this->validate());
    }


    public function render()
    {
        return view('livewire.admin.insurance.add-insurance');
    }
}
