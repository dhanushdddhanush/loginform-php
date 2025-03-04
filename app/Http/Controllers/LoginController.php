<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('login');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            return redirect('/success')->with('user', $user->fname);
        } else {
            return redirect('/fail')->withErrors(['login' => 'Invalid email or password.']);
        }
    }

    public function successPage()
    {
        return view('success');
    }

    public function failPage()
    {
        return view('fail');
    }
}
