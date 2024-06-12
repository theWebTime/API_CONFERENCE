<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferencePayment extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'registers_id', 'conference_plans_id', 'transaction_id', 'status'];

}
