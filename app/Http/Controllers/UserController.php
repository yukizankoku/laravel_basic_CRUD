<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index', [
            "title" => "Profile",
            "user" => auth()->user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.user.show', [
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
        return view('dashboard.user.edit',[
            'user' => $user,
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
    
        return redirect('/dashboard/user')->with('success', 'Profile Has Been Updated!');
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

        return redirect('/')->with('success', 'Account Has been Deleted!');
    }

    public function changePassword(Request $request)
    {
        return view('dashboard.change-password', [
            "title" => "Change Password",
            "user" => auth()->user(),
        ]);
    }
 
    public function changePasswordSave(Request $request)
    {
        
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();
 
 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
 
// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
 
        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return redirect('/dashboard/user')->with('success', "Password Changed Successfully");
    }
}
