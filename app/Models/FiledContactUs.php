<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiledContactUs extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'name', 'email', 'phone_number', 'country_id', 'message'];
}
