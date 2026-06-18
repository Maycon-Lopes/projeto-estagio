<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('teams.user.user-edit');
    }

    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('photo')) {

            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }

            $user->photo = $request->file('photo')
                ->store('users', 'public');
        }

        $user->save();

        return redirect()->route('table');
    }
}