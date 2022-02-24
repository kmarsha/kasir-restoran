<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest('updated_at')->paginate(4);
        return view('admin.index', compact('users'))
            ->with('i', (request()->input('page', 1) -1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request->validate([
            'username' => 'unique:users,username'
        ]);
        
        $name = $request->name;
        $username = $request->username;
        $pass = $request->password;
        $role = $request->role;

        User::create([
            'name' => $name,
            'username' => $username,
            'password' => bcrypt($pass),
            'pass' => $pass,
            'role' => $role,
        ]);

        return redirect()->route('admin.registration.index')->with('success', 'User Baru Telah Berhasil Ditambahkan!');
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
    public function edit(User $user, $key)
    {
        $users = User::where('username', $key)->get();
        $data = $users[0];
        return view('admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user, $key)
    {
        $name = $request->name;
        $username = $request->username;
        $pass = $request->password;
        $role = $request->role;
        
        $users = User::where('username', $key)->get();
        $user = $users[0];

        if ($user->username != $username) {
            $request->validate([
                'username' => 'unique:users,username'
            ]);
        }

        $user->update([
            'name' => $name,
            'username' => $username,
            'password' => bcrypt($pass),
            'pass' => $pass,
            'role' => $role,
        ]);

        return redirect()->route('admin.registration.index')->with('success', "User {$user->username} Telah Berhasil Diperbaharui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $key)
    {
        $users = User::where('username', $key)->get();
        $user = $users[0];
        
        $user->delete();

        return redirect()->route('admin.registration.index')->with('success', "User {$user->username} Telah Berhasil Dihapus");
    }
}
