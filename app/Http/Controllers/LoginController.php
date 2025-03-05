<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();


            if ($user->password === $request->password) {
                session(['user' => $user->fname]);

                return redirect()->route('success');
            } else {
                return redirect()->route('fail')->with('error', 'Password does not match!');
            }
       

        return redirect()->route('fail')->with('error', 'User not found!');
    }
}
