<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioService extends Model
{
    use HasFactory;

    protected $table='portfolio_service';

    protected $fillable =['portfolio_id','service_id'];
}
