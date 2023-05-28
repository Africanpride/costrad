<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UpdateProfile extends Component
{

    use WithFileUploads;

    public User $user;
    public $photo;
    public $profile;
    public $input = [];
    public $userID;

    public function mount()
    {
        $this->user = Auth::user();
        $this->profile = Auth::user()->profile;
        $this->userID = Auth::user()->id;
    }
    protected function rules()
    {
        return [
            'user.firstName' => 'required|string|min:2',
            'user.lastName' => 'required|string|min:8',
            'user.profile.title' => 'nullable|string|min:1',
            'user.profile.gender' => 'nullable|string|min:1',
            'user.profile.dateOfBirth' => 'nullable|string|min:1',
            'user.profile.marital_status' => 'nullable|string|min:1',
            'user.profile.telephone' => 'nullable|string|min:9',
            'user.profile.address' => 'nullable|string|min:8',
            'user.profile.state' => 'nullable|string|min:8',
            'user.profile.city' => 'nullable|string|min:8',
            'user.profile.country' => 'nullable|string|min:8',
            'user.profile.zipcode' => 'nullable|string|min:8',
            'user.profile.emergencyContactName' => 'nullable|string|min:8',
            'user.profile.emergencyContactTelephone' => 'nullable|string|min:8',
            'user.profile.nationality' => 'nullable|string|min:8',
            'user.profile.bio' => 'nullable|string|min:8',
            'user.email' => 'required|string|email|max:255|unique:users,email,' . $this->userID
        ];
    }


    public function savePhoto()
    {
        $this->user->deleteProfilePhoto();
        $this->user->updateProfilePhoto($this->photo);
    }

    public function removeProfilePhoto()
    {
        $this->user->deleteProfilePhoto();
        return redirect()->route('profile.show');
    }

    public function saveProfile()
    {
        $this->validate();
        $this->savePhoto();
        dd('save profile');
    }
    public function render()
    {
        return view('livewire.user.profile.update-profile');
    }
}
