<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{


    protected $fillable = [
        'from', 'to', 'paribahan_name', 'total_seats', 'date_of_journey',
        'ticket_fare', 'dep_time', 'arr_time'
    ];


}
