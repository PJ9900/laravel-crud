<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('subcon.show',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subcon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|string'
        ]);

        $image = $request->file('image')->store('public/users');

        $subCon = new User();
        $subCon->image = $image;
        $subCon->name = $request->name;
        $subCon->email = $request->email;
        $subCon->phone = $request->phone;
        $subCon->password = Hash::make($request->password);

        $subCon->save();
        return redirect('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);
        return view('subcon.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
         $request->validate([
            'image' => 'mimes:png,jpg,jpeg',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $subCon = User::find($user->id);

        if ($request->hasFile('image')) {
            Storage::delete($subCon->image);
            $logo_img = $request->file('image')->store('public/users');
            $subCon->image = $logo_img;
        }

        $subCon->name = $request->name;
        $subCon->email = $request->email;
        $subCon->phone = $request->phone;

        $subCon->save();
        // return redirect('users');
        return redirect()->route('users.index')->with('success', 'User updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $content = User::find($user->id);
        if ($content) {
            Storage::delete($content->image);
            $content->delete();
        }
        // return redirect('user');
         return redirect()->route('users.index')->with('success', 'User deleted successfully.');

    }

}



