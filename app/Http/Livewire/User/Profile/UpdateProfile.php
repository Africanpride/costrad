<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateProfile extends Component
{
    use WithFileUploads;

    public User $user;
    public $photo;
    public $profile;
    public $validatedData = [];
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
            'user.lastName' => 'required|string',
            'profile.title' => 'nullable|string',
            'profile.disabled' => 'nullable',
            'profile.gender' => 'nullable',
            'profile.dateOfBirth' => 'nullable|string|min:1',
            'profile.marital_status' => 'nullable',
            'profile.telephone' => 'nullable|string|min:9',
            'profile.address' => 'nullable|string',
            'profile.state' => 'nullable|string',
            'profile.city' => 'nullable|string',
            'profile.country' => 'nullable|string',
            'profile.zipcode' => 'nullable|string',
            'profile.emergencyContactName' => 'nullable|string',
            'profile.emergencyContactTelephone' => 'nullable|string',
            'profile.nationality' => 'nullable|string',
            'profile.bio' => 'nullable|string',
            'user.email' => [
                'nullable',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->userID),
            ],
            'photo' => 'nullable|mimes:jpg,jpeg,png|max:1024',
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
        $validatedData = $this->validate();

        $email = $validatedData['user']['email'];

        if (isset($validatedData['photo'])) {
            $this->user->updateProfilePhoto($validatedData['photo']);
        }

        if (
            $email !== Auth::user()->email || Auth::user()->email instanceof MustVerifyEmail
        ) {
            $this->user->forceFill([
                'firstName' => $validatedData['user']['firstName'],
                'lastName' => $validatedData['user']['lastName'],
                'email' => $validatedData['user']['email'],
                'email_verified_at' => null,
            ])->save();
            Auth::user()->sendEmailVerificationNotification();
            app('flasher')->addSuccess('Email Verification Request Sent.', 'Success');
        } else {
            $this->user->forceFill([
                'firstName' => $validatedData['user']['firstName'],
                'lastName' => $validatedData['user']['lastName'],
                'email' => $validatedData['user']['email'],
            ])->save();
        }

        $this->profile->forceFill($validatedData['profile'])->save();
        app('flasher')->addSuccess('Profile Updated.', 'Success');
        return redirect()->route('profile.show');
    }

    public function render()
    {
        return view('livewire.user.profile.update-profile');
    }
}
