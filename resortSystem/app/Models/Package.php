<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'package_id';
    protected $fillable = [
        'package_name',
        'description',
        'price',
        'duration',
    ];
}
