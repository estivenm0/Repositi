<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $input['nickname'] = $this->generateNickname($input['name']);


        return User::create([
            'name' => $input['name'],
            'nickname' => $input['nickname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }

    public function generateNickname($Name)
    {
        $nickname = '';
        $words = explode(' ', $Name);
        
        foreach ($words as $word) {
            $nickname .= strtoupper(substr($word, 0, 1));
        }

        while(User::where('nickname', $nickname)->count() || strlen($nickname) < 5){
            $nickname .= rand(1, 99);;
        }
        return $nickname;
    }
}
