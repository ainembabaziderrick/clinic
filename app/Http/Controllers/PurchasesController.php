<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseModel;
use App\Models\SupplierModel;
use App\Models\InvoiceModel;

class PurchasesController extends Controller
{
    public function purchases_list(Request $request){
        $data['getRecord'] = PurchaseModel::get();
        return view('admin.purchases.list', $data);
    }
    public function add_purchases(Request $request){
        $data['getSupplier'] = SupplierModel::get();
        $data['getInvoice'] = InvoiceModel::get();
        return view('admin.purchases.add',$data);
    }

    public function insert_add_purchases(Request $request){
        
        $save = new PurchaseModel;
        $save->suppliers_id = trim($request->suppliers_id);
        $save->invoices_id = trim($request->invoices_id);
        $save->voucher_number = trim($request->voucher_number);
        $save->purchase_date = trim($request->purchase_date);
        $save->total_amount = trim($request->total_amount);
        $save->payment_status = trim($request->payment_status);
                
        $save->save();

        return redirect('admin/purchases')->with('success', 'Purchase successfully created');
        
    }

    public function EditPurchases($id){
        $data['getInvoice'] = InvoiceModel::get();
        $data['getSupplier'] = SupplierModel::get();
        $data['getRecord'] = PurchaseModel::find($id);
        return view('admin.purchases.edit', $data);
     
     }

     public function UpdatePurchases(Request $request, $id){
    
        $update =   PurchaseModel::find($id)->update([
               'suppliers_id' => $request->suppliers_id,
               'invoices_id' => $request->invoices_id,
               'voucher_number' => $request->voucher_number,
               'purchase_date' => $request->purchase_date,
               'total_amount' => $request->total_amount,
               'payment_status' => $request->payment_status,
              
                      
           ]);
           return redirect('admin/purchases')->with('success','Purchase Updated succcessfully');
        
        }

        public function DeletePurchases($id){
            $delete = PurchaseModel::find($id)->Delete();
            return Redirect()->back()->with('success','Purchase Deleted succcessfully');
         }

}
