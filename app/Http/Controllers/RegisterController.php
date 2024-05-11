<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=>'Register',
        ]);
    }

    public function store(Request $request)
    {
        // Mengambil data yang dikirim dari form
        $validatedData=$request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:7|max:255',
            'portofolio' => 'file|mimes:pdf|max:51200',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users'
        ]);

        if($request->file('portofolio')) {
            $validatedData['portofolio'] = $request->file('portofolio')->store('registered-porto');
        }

        // Mengubah password menjadi hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Menyimpan data pengguna baru ke dalam database
        User::create($validatedData);

        
        // $request->session()->flash('success', 'Registration successfull!');

        // Mengembalikan halaman login
        return redirect('/')->with('success', 'Registration successfull! Please Wait for Our Verification, Thank You!');
    }
}
