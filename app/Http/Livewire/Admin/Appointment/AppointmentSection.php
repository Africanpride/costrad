<?php

namespace App\Http\Livewire\Admin\Appointment;

use Livewire\Component;
use App\Models\Appointment;

class AppointmentSection extends Component
{

    public function toggleActive(Appointment $appointment)
    {
        $appointment->update(['active' => !$appointment->active]);
        return redirect('manage-appointment');
    }

    public function render()
    {
        return view('livewire.admin.appointment.appointment-section',
        ['appointments' => Appointment::paginate(10)]);
    }
}
