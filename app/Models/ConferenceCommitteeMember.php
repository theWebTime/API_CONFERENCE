<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceCommitteeMember extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'image', 'name', 'designation', 'facebook_link', 'x_Link', 'linkedin_link'];

    public function getImageAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/images/conferenceCommitteeMember/' . $value;
        } else {
            return null;
        }
    }
}
