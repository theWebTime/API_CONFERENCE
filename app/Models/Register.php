<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'title', 'name', 'email', 'alternative_email', 'phone_number', 'whatsapp_number', 'institution', 'country_id'];
}
