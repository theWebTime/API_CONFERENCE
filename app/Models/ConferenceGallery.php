<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceGallery extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'data'];

    public function getDataAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/images/conferenceGallery/' . $value;
        } else {
            return null;
        }
    }
}
