<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadSource extends Model
{
    protected $fillable = ['number', 'forwarding_number', 'description'];

    public function leads()
    {
        return $this->hasMany('Lead');
    }
}
