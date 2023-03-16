<?php

namespace App\Http\Livewire\Admin\Announcement;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Announcement;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;

class AddAnnouncement extends ModalComponent
{
    public $title, $body, $icon, $image;

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

    public function store()
    {

        // dd('this is storing Institute');
        $validatedData = $this->validate([
            'title' => 'required|min:2|unique:announcements,title',
            'body' => 'required|min:2',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'icon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
        ]);

        if ($this->image) {

            // if ($this->announcement->logo) {
            //     Storage::delete('images/announcements/' . $this->institute->logo);
            // }
            $imageName = $this->image->storeAs('images/announcements', random_int(1,600) . "." . $this->image->getClientOriginalExtension(), 'public');

            $validatedData['image'] = $imageName;
        }

        if ($this->icon) {

            // if ($this->announcement->icon) {
            //     Storage::delete('icons/announcements/' . $this->institute->icon);
            // }
            $iconName = $this->icon->storeAs('icons/announcements', random_int(1,600) . "." . $this->icon->getClientOriginalExtension(), 'public');

            $validatedData['icon'] = $iconName;
        }

        if ($this->title) {
            $validatedData['slug'] = Str::slug($this->title);
        }

        // dd($validatedData);
        Announcement::create($validatedData);

        return redirect('admin/announcements')->with('message', 'Announcement created successfully.');
    }

    public function render()
    {
        return view('livewire.admin.announcement.add-announcement');
    }
}
