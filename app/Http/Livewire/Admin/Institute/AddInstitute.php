<?php

namespace App\Http\Livewire\Admin\Institute;

use Livewire\Component;
use App\Models\Institute;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;


class AddInstitute extends ModalComponent
{
    use WithFileUploads;

    public $name, $acronym, $overview, $about, $icon, $logo, $banner, $startDate, $endDate, $seo, $active, $url, $price;
    public $instituteId;
    public $isOpen = 0;

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function store()
    {

        dd('this is storing Institute');

        $validatedData = $this->validate([
            'name' => 'required|min:2',
            'acronym' => 'required|min:2',
            'overview' => 'required|min:2',
            'about' => 'required|min:2',
            'icon' => 'nullable',
            'logo' => 'nullable',
            'banner' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'seo' => 'nullable',
            'active' => 'required',
            'url' => 'nullable',
            'price' => 'required',
        ]);

        Institute::create($validatedData);

        session()->flash('message', 'Institute created successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        dd('this is editing Institute');

        $institute = Institute::findOrFail($id);
        $this->instituteId = $id;
        $this->name = $institute->name;
        $this->acronym = $institute->acronym;
        $this->overview = $institute->overview;
        $this->about = $institute->about;
        $this->icon = $institute->icon;
        $this->logo = $institute->logo;
        $this->banner = $institute->banner;
        $this->startDate = $institute->startDate;
        $this->endDate = $institute->endDate;
        $this->seo = $institute->seo;
        $this->active = $institute->active;
        $this->url = $institute->url;
        $this->price = $institute->price;

        $this->openModal();
    }

    public function update($institute)
    {
        $validatedData = $this->validate([
            'name' => 'required|min:2',
            'acronym' => 'required|min:2',
            'overview' => 'required|min:2',
            'about' => 'required|min:2',
            'icon' => 'nullable',
            'logo' => 'nullable',
            'banner' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'seo' => 'nullable',
            'active' => 'required',
            'url' => 'nullable',
            'price' => 'required',
        ]);

        $institute->update($validatedData);

        session()->flash('message', 'Institute updated successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Institute::find($id)->delete();
        session()->flash('message', 'Institute deleted successfully.');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->acronym = '';
        $this->overview = '';
        $this->about = '';
        $this->icon = '';
        $this->logo = '';
        $this->banner = '';
        $this->startDate = '';
        $this->endDate = '';
        $this->seo = '';
        $this->active = '';
        $this->url = '';
        $this->price = '';
    }

    // public function closeModal()
    // {
    //     $this->isOpen = false;
    // }

    // public function openModal()
    // {
    //     $this->isOpen = true;
    // }

    public function render()
    {
        return view('livewire.admin.institute.add-institute');
    }
}
