<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riders extends Model
{
    use HasFactory;
    protected $table = 'riders';
    protected $primaryKey='id';
    protected $fillable =[
        'stable_id',
        'name',
        'email',
        'age',
    ];
}