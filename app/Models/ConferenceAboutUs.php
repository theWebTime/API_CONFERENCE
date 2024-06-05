<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceAboutUs extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'image', 'title', 'description', 'international_speaker'];

    public function getImageAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/images/conferenceAboutUs/' . $value;
        } else {
            return null;
        }
    }
}
