<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContactUs extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'country_id', 'message'];
}
