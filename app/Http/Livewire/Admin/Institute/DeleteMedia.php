<?php

namespace App\Http\Livewire\Admin\Institute;

use Livewire\Component;
use App\Models\Institute;
use LivewireUI\Modal\ModalComponent;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DeleteMedia extends ModalComponent
{

    public Media $media;
    public Institute $institute;
    public $image, $imageId;
    public function mount(Institute $institute, Media $media)
    {
        $this->media = $media;
        $this->institute = $institute;
    }


    public function deleteMedia()
    {
        dd('deleted');
        $this->institute->delete();
        return redirect('admin/institutes')->with('message', 'Institute deleted successfully.');
    }


    public static function closeModalOnEscape(): bool
    {
        return false;
    }


    public function backup()
    {
        // $media = $this->institute->getMedia('banner')->find($mediaId);

        // if ($media) {
        //     $media->delete();
        // }

    }

    public function render()
    {
        return view('livewire.admin.institute.delete-media');
    }
}
