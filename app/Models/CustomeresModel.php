<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomeresModel extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'contact_number',
        'address',
        'doctor_name',
        'doctor_address',
        'attendant',
        'nok_name',
        'nok_contact',
        'nok_address',
        'time',
        'date',
        'reason',
        'history',
        'observation',
        'emergency',
        'investigation',
        'emergency_treatment',
        'results',
        'impresion',
        'prescription',
        
    ];
}
