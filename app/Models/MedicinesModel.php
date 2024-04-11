<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinesModel extends Model
{
    use HasFactory;


    protected $table = 'medicines';

    protected $fillable = [
        'name',
        'packing',
        'generic_name',
        'supplier_name',
        
        
    ];

}
