<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateLogin
{
    public function handle(Request $request, Closure $next)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
            'phone' => 'required|digits:10',
        ]);

        return $next($request);
    }
}
