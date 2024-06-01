<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'primary_color', 'secondary_color', 'domain', 'title', 'date', 'address', 'iframe', 'contact_number1', 'contact_number2', 'wp_number', 'email', 'logo', 'abstract_file_sample', 'status', 'conference_tags_id', 'conference_types_id', 'country_id', 'state_id', 'city_id'];

    public function getLogoAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/images/conference/' . $value;
        } else {
            return null;
        }
    }

    public function getAbstractFileSampleAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/file/abstractFileSample/' . $value;
        } else {
            return null;
        }
    }
}
