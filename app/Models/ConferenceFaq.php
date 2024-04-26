<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceFaq extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'question', 'answer'];
}
