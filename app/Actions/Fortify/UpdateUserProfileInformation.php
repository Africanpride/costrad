<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        $validatedData =  Validator::make($input, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'title' => ['nullable', 'string', 'max:255'],
            'gender' => ['nullable', 'string', 'max:255'],
            'dateOfBirth' => ['nullable', 'date'],
            'marital_status' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'max:255'],
            'zipcode' => ['nullable', 'string', 'max:255'],
            'telephone' => ['nullable', 'string', 'max:255'],
            'emergencyContactName' => ['nullable', 'string', 'max:255'],
            'emergencyContactTelephone' => ['nullable', 'string', 'max:255'],
            'nationality' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'disabled' => ['nullable', 'boolean'],
            'avatar' => ['nullable', 'string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');


        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if (
            $input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail
        ) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'firstName' => $validatedData['firstName'],
                'lastName' => $validatedData['lastName'],
                'email' => $validatedData['email'],
            ])->save();

            $user->profile->updateOrCreate([
                'title' => $validatedData['title'],
                'gender' => $validatedData['gender'],
                'dateOfBirth' => $validatedData['dateOfBirth'],
                'marital_status' => $validatedData['marital_status'],
                'address' => $validatedData['address'],
                'city' => $validatedData['city'],
                'country' => $validatedData['country'],
                'state' => $validatedData['state'],
                'zipcode' => $validatedData['zipcode'],
                'telephone' => $validatedData['telephone'],
                'emergencyContactName' => $validatedData['emergencyContactName'],
                'emergencyContactTelephone' => $validatedData['emergencyContactTelephone'],
                'nationality' => $validatedData['nationality'],
                'bio' => $validatedData['bio'],
                'disabled' => $validatedData['disabled'],
                'avatar' => $validatedData['avatar'],
            ])->save();

        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'firstName' => $input['firstName'],
            'lastName' => $input['lastName'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->Notification();
    }
}
