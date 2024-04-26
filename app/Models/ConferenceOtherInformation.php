<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceOtherInformation extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'venue_description', 'guidelines_description', 'brochures'];

    public function getBrochuresAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/file/brochure/' . $value;
        } else {
            return null;
        }
    }
}
