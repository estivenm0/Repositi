<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    
    public function show(string $nickname) : View {
        $user = User::where('nickname', $nickname)->where('active', true)->firstOrFail();

        return view('profile.profile', [
            'user'=>$user
        ]);
    }


    public function webs() : View {
        return View('user.webs');
    }

}
