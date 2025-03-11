<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Events\UserLoggedIn;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('fail')->with('error', 'User not found!');
        }

        if ($user->password === $request->password) {
            session(['user' => $user->fname, 'user_email' => $user->email]);
            event(new UserLoggedIn($user));
            return redirect()->route('success');
        }

        return redirect()->route('fail')->with(['error' => 'Invalid email or password!']);
    }

    public function updateProfile(Request $request)
    {
        $user = User::where('email', session('user_email'))->first();

        if (!$user) {
            return redirect()->route('fail')->with('error', 'Unauthorized!');
        }

        $user->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone' => $request->phone,
        ]);

        session(['user' => $user->fname]);

        return redirect()->route('success')->with('message', 'Profile updated successfully!');
    }
}

