<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'registers';
    protected $fillable = ['email', 'password'];
    use HasFactory;
}
