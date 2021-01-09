<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;

    public function services()
    {
        return $this->belongsTo('App\Models\service');
    }
}
