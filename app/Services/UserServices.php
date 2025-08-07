<?php

namespace App\Services;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class UserServices {

    public function registerUser(StoreRegisterRequest $storeRegisterRequest) 
    {
        $userAttributes = $storeRegisterRequest->validated();

        $employerAttributes = request()->validate([
            'name' => 'required',
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])]
        ]);

        $logoPath = request()->logo->store('logos', 'public');

        $user = User::create($userAttributes);

        $user->employer()->create([
            'name' => $employerAttributes['name'],
            'logo' => $logoPath
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function loginUser(StoreLoginRequest $storeLoginRequest)
    {
        $credentials = $storeLoginRequest->validated();

        if(Auth::attempt($credentials, $storeLoginRequest->boolean('remember'))) {
            $storeLoginRequest->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


}


?>