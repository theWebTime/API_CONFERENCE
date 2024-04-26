<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceProgram extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'title', 'description'];
}
