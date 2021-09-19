<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function profile(Request $request)
    {
        return view('settings.profile', ['user' => $request->user()]);
    }

    public function saveProfile(Request $request)
    {
        $attributes = validator($request->all(), [
            'name' => ['required', 'max:255'],
            'url' => 'max:100',
            'company' => 'max:255',
            'photo' => ['image']
        ])->validate();
        $user = auth()->user();
        $user->name = $request->name;
        $user->url = $request->url;
        $user->company = $request->company;
        if ($request->photo) {
            $filename = $user->id . '-' . uniqid() . '.' . $request->photo->extension();
            $request->photo->storeAs('public/images/user', $filename);
            $user->photo = $filename;
        }
        $user->save();
        return back()->with(['alert' => 'Update Profile Successfully']);
    }
}
