<?php

namespace App\Http\Livewire\Admin\Institute;

use Livewire\Component;
use App\Models\Institute;
use LivewireUI\Modal\ModalComponent;

class DeleteMedia extends ModalComponent
{

    public Institute $institute;
    public $imageId;
    public function mount(Institute $institute, $imageId)
    {
        $this->institute = $institute;

    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function deleteImage()
    {

        // $this->institute->delete();
        // return redirect('admin/institutes')->with('message', 'Institute deleted successfully.');
    }
    public function render()
    {
        return view('livewire.admin.institute.delete-media');
    }
}
