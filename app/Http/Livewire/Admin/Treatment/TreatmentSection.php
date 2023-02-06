<?php

namespace App\Http\Livewire\Admin\Treatment;

use Livewire\Component;
use App\Models\Treatment;

class TreatmentSection extends Component
{
    public function toggleActive($treatmentId)
    {
        // dd('Hello toggle');
        $treatment = Treatment::findOrFail($treatmentId);
        $treatment->update(['active' => !$treatment->active]);
        return redirect('manage-treatment', ['treatments' => Treatment::paginate(7)]);
    }
    public function render()
    {
        return view('livewire.admin.treatment.treatment-section',['treatments' => Treatment::paginate(7)]);
    }
}
