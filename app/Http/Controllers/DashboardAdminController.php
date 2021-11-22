<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.admins.index', [
            "title" => "Admins Dashboard",
            // "users" => User::all(),
            "admins" => User::filter(request(['search']))->get(),
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
        return view('dashboard.admins.create', [
            'title' => "Create Admin",
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
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:50', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:15',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successful! Please Login!');

        return redirect('/dashboard/admins')->with('success', 'New Admin has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        //
        // $admin = User::where('id', '=', $id)->get();
        // return $admin;
        return view('dashboard.admins.edit', [
            'title' => "Edit Admin",
            "admin" => $admin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
        //
        // $admin = User::where('id', '=', $id)->get();
        $rules = [
            'name' => 'required|max:255',
            'password' => 'required|min:5|max:15',
        ];

        if($request->username != $admin->username) {
            $rules['username'] = 'required|min:3|max:50|unique:users';
        }
        if($request->email != $admin->email) {
            $rules['username'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);

        User::where('id', $admin->id)
                ->update($validatedData);

        return redirect('/dashboard/admins')->with('success', 'Admin has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $admin = User::where('id', '=', $id)->get();
        User::destroy($admin);

        return redirect('/dashboard/admins')->with('success', 'Admin has been deleted!');
    }
}
