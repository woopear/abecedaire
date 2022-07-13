<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        $role = Role::find($input['role']);

        $user = User::create([
            'first_name' => $input['firstName'],
            'last_name' => $input['lastName'],
            'name' => $input['firstName'] . ' ' . $input['lastName'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $role->users()->save($user);

        return $user;
    }
}
