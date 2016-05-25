<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User; // We are going to use the User model
use App\Models\Tag;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $posts = Tag::all(); // Get the last 10 registered users
        view()->share('posts', $posts); // Pass the $users variable to all views
    }

    public function register()
    {

    }
}