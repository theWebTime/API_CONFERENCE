<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferencePlan extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'amount', 'title', 'description', 'status'];
}
