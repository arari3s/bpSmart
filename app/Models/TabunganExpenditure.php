<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TabunganExpenditure extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'officer', 'price', 'noted'
    ];
}
