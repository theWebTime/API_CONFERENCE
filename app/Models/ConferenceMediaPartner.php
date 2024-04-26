<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceMediaPartner extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'image'];

    public function getImageAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/images/conferenceMediaPartner/' . $value;
        } else {
            return null;
        }
    }
}
