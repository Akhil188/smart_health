<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    use HasFactory;
    protected $fillable = [
        'pid',
        'did',
        'name',
        'duration',
        'usage',
        'quantity'
    ];
}