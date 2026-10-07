<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([

            'nik' => [
                'required',
                'digits:16',
                'unique:users,nik',
            ],

            'name' => [
                'required',
                'string',
                'max:255',
                'unique:users,name',
            ],

            'phone' => [
                'required',
                'string',
                'max:20',
            ],

            'username' => [
                'required',
                'string',
                'max:50',
                'unique:users,username',
            ],

            'password' => [
                'required',
                'confirmed',
                Rules\Password::defaults(),
            ],

        ], [


            'nik.required' =>
                'NIK wajib diisi.',

            'nik.digits' =>
                'NIK harus terdiri dari tepat 16 digit.',

            'nik.unique' =>
                'NIK tersebut sudah terdaftar.',



            'name.required' =>
                'Nama lengkap wajib diisi.',

            'name.unique' =>
                'Nama tersebut sudah terdaftar. Silakan gunakan nama yang berbeda.',



            'phone.required' =>
                'Nomor telepon wajib diisi.',

            'phone.max' =>
                'Nomor telepon terlalu panjang.',




            'username.required' =>
                'Username wajib diisi.',

            'username.unique' =>
                'Username sudah digunakan. Silakan pilih username lain.',



            'password.required' =>
                'Password wajib diisi.',

            'password.confirmed' =>
                'Konfirmasi password tidak cocok.',

        ]);



        $user = User::create([

            'nik' => $request->nik,

            'name' => $request->name,

            'phone' => $request->phone,

            'username' => $request->username,

            'password' => Hash::make(
                $request->password
            ),



            'role' => 'warga',

        ]);



        event(new Registered($user));



        Auth::guard('web')->login($user);




        $request->session()->regenerate();



        return redirect()->route('dashboard');
    }
}
