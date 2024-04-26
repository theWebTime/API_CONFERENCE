<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'date', 'data'];

    public function getDataAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/images/conferenceSchedule/' . $value;
        } else {
            return null;
        }
    }
}
