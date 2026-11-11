<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = [
        'user_id', 
        'accommodation_id', 
        'check_in_date', 
        'check_out_date', 
        'total_price', 
        'status'
    ];
}
