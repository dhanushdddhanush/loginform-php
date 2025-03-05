<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['fname', 'lname', 'email', 'password', 'phone'];

    protected $hidden = ['password'];

    public $timestamps = false;

    // ✅ Auto-hash password before saving
    public function setPasswordAttribute($value)
    {
        if (!empty($value) && !Hash::needsRehash($value)) {
            $this->attributes['password'] = Hash::make($value);
        }
    }
}
