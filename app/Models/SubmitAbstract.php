<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitAbstract extends Model
{
    use HasFactory;

    protected $fillable = ['conferences_id', 'title', 'name', 'email', 'alternative_email', 'phone_number', 'whatsapp_number', 'city', 'organization', 'country_id', 'interested_in', 'abstract_title', 'message', 'submit_abstract_file'];

    public function getSubmitAbstractFileAttribute($value)
    {
        $host = request()->getSchemeAndHttpHost();
        if ($value) {
            return $host . '/file/submitAbstractFile/' . $value;
        } else {
            return null;
        }
    }
}
