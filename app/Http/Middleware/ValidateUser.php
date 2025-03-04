<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateUser
{
    public function handle(Request $request, Closure $next)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'mail' => 'required|email',
            'phone' => 'required|digits:10',
            'password' => 'required|min:6|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/',
        ], [
            'password.regex' => 'Password must contain at least one letter and one number.',
        ]);

        if ($validator->fails()) {
            return redirect('/fail')->withErrors($validator)->withInput();
        }

        return $next($request);
    }
}
