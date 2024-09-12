<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'isNegotiable',
        'description',
        'category_id',
        'user_id',
        'state_id'
    ];
}
