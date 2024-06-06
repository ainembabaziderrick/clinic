<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    protected $fillable = [
        'net_total',
        'invoices_date',
        'customers_id',
        'total_amount',
        'total_discount',
            
        ];

        public function getCustomerName(){
            return $this->belongsTo(CustomeresModel::class,'customers_id');
        }

}
