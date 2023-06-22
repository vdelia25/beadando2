<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horses extends Model
{
    use HasFactory;
    protected $table = 'horses';
    protected $primaryKey='id';
    protected $fillable =[
        'stable_id',
        'name',
        'gender',
        'age',
        'coat',
        'breed',
    ];
}
