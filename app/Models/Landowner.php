<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landowner extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'city',
        'kebele',
        'occupation',
        'Rdate',
        'serviceType',
        'southbondery',
        'eastbondery',
        'northbondery',
        'westbondery',
        'area',
        'parcelcode',
        'landlavel',
        ];
}
