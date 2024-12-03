<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'birth_date',
        'driver_license_number',
        'driver_license_validity',
        'password',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'driver_license_validity' => 'date',
    ];

    protected $hidden = [
        'password',
    ];
}
