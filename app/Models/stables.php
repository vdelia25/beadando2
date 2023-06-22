<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stables extends Model
{
    use HasFactory;
    protected $table = 'stable';
    protected $primaryKey='id';
    protected $fillable =[
        'name',
        'county',
        'city',
        'street',
        'number',
        'phone',
    ];
}