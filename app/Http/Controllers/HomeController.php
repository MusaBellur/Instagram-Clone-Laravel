<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    public function index (User $user) {
        $follows= (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        //dd($follows);
        return view('dashboard', compact('user', 'follows'));
    }
    public function edit(User $user){
        //$this->authorize('update', $user->profile);
        return view('edit', compact('user'));
    }
    public function update(User $user){
        //$this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('home', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(800, 800);
            $image->save();
        }

        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        return redirect("/dashboard/{$user->id}");
    }
}
