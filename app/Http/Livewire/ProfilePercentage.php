<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Profile;
use Livewire\Component;

class ProfilePercentage extends Component
{

    function calculateProfileCompletionPercentage($userId)
    {
        // $user = User::find($userId);
        $profile = Profile::with('user')->find($userId);

        $filledAttributes = 0;
        $totalAttributes = 0;

        $profileAttributes = [
            'title',
            'gender',
            'dateOfBirth',
            'marital_status',
            'address',
            'city',
            'country',
            'state',
            'zipcode',
            'country',
            'telephone',
            'emergencyContactName',
            'emergencyContactTelephone',
            'nationality',
            'bio',
            'disabled',
            'avatar'
        ];

        foreach ($profileAttributes as $attribute) {
            if (!empty($profile->{$attribute})) {
                $filledAttributes++;
            }
            $totalAttributes++;
        }

        if ($totalAttributes > 0) {
            $percentage = ($filledAttributes / $totalAttributes) * 100;
        } else {
            $percentage = 0;
        }

        return $percentage;
    }
    public function render()
    {
        return view('livewire.profile-percentage');
    }
}
