<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseModel extends Model
{
    use HasFactory;
    protected $table = 'purchases';

    protected $fillable = [
        'suppliers_id',
        'invoices_id',
        'voucher_number',
        'purchase_date',
        'total_amount',
        'payment_status',
            
        ];

        public function getSupplierName(){
            return $this->belongsTo(SupplierModel::class,'suppliers_id');
        }

        public function getInvoiceID(){
            return $this->belongsTo(InvoiceModel::class,'invoices_id');
        }
}
