<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinesStockModel extends Model
{
    use HasFactory;

    protected $table = 'medicines_stock';

    protected $fillable = [
        'medicines_id',
        'batch_id',
        'expiry_date',
        'quantity',
        'mrp',
        'rate',
        
        
    ];

    public function getMedicineName(){
        return $this->belongsTo(MedicinesModel::class,'medicines_id');
    }
}
