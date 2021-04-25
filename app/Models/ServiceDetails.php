<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    use HasFactory;
    protected $casts = [
        'details' => 'array',
        'features' => 'array',
    ];
    protected $table="service_details";
    protected $fillable=['details','features','service_id'];
    protected $dates=['created_at','updated_at'];

}
