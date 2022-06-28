<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
    public function register(Request $request) 
    {
        $user = User::create($request->all());
        Log::info($user);
       // auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
