<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AccessRights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.users.index', [
            "title" => "Users",
            "users" => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create',[
            'accesses' => AccessRights::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:7|max:255',
            'portofolio' => 'file|mimes:pdf|max:51200',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'access_rights_id' => 'required'
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
        return redirect('/dashboard/users')->with('success', 'New User has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit',[
            'user' => $user,
            'accesses' => AccessRights::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email:dns',
            'portofolio' => 'file|mimes:pdf|max:51200',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'access_rights_id' => 'required'
        ];
    
        if ($request->username != $user->username) {
            $rules['username'] = 'required|max:255|unique:users';
        }
    
        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }
    
        if ($request->phone != $user->phone) {
            $rules['phone'] = 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users';
        }
    
        // Cek jika pengguna adalah admin
        if (auth()->user()->access_rights_id != '1') {
            $rules['password'] = 'required|min:7|max:255';
        }
    
        $validatedData = $request->validate($rules);
    
        // Cek password jika diperlukan
        if (array_key_exists('password', $rules) && !Hash::check($request->input('password'), $user->password)) {
            return back()->withErrors(['password' => 'Wrong Password']);
        }
    
        if ($request->file('portofolio')) {
            if ($user->portofolio) {
                Storage::delete($user->portofolio);
            }
            $validatedData['portofolio'] = $request->file('portofolio')->store('registered-porto');
        }
    
        if (array_key_exists('password', $validatedData)) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }
    
        User::where('id', $user->id)->update($validatedData);
    
        return redirect('/dashboard/users')->with('success', 'User Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->portofolio) {
            Storage::delete($user->portofolio);
        }

        User::destroy($user->id);

        return redirect('/dashboard/users')->with('success', 'User Has been Deleted!');
    }
}
