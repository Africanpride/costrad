<?php

namespace App\Http\Livewire\Admin\Insurance;

use Livewire\Component;
use App\Models\Insurance;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;

class UpdateInsurance extends ModalComponent
{

    use WithFileUploads;

    public Insurance $insurance;
    public  $name;
    public  $address;
    public  $telephone_1;
    public  $telephone_2;
    public  $telephone_3;
    public  $country;
    public  $email;
    public  $percentage;
    public  $logo;
    public $company_logo;

    public function mount(Insurance $insurance)
    {
        $this->insurance  = $insurance;
        $this->address   = $insurance->address;
        $this->name    = $insurance->name;
        $this->telephone_1     = $insurance->telephone_1;
        $this->email        = $insurance->email;
        $this->logo       = $insurance->company_logo;
        $this->percentage       = $insurance->percentage;
        $this->country = $insurance->country;
    }


    public function updateInsurance()
    {
        $data = $this->validate([

            'name' => 'required|min:3|max:255|unique:insurances, ' . $this->insurance->id,
            'address' => 'nullable|min:3|max:255',
            'telephone_1' => 'nullable|min:3|max:255|unique:insurances,' . $this->insurance->id,
            'telephone_2' => 'nullable|min:3|max:255',
            'telephone_3' => 'nullable|min:3|max:255',
            'percentage' => 'required',
            'country' => 'required',
            'email' => 'required|unique:users,email, ' . $this->insurance->id,
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);

        if ($this->logo) {
            Storage::delete($this->insurance->company_logo);
            $imageName = $this->logo->store("logo", 'public');
            $data['logo'] = $imageName;
        }

        $this->insurance->update($data);
        return redirect('insurance');
    }


    public function render()
    {
        return view('livewire.admin.insurance.update-insurance');
    }
}
