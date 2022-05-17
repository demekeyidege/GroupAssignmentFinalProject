<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LAuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'fname',
        'lname',
        'userType',
        

        ];
}
