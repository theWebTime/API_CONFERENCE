<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceTestimonial extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'image', 'name', 'designation', 'review'];

    public function getImageAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/images/conferenceTestimonial/' . $value;
        } else {
            return null;
        }
    }
}
