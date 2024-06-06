<?php

namespace App\Http\Controllers;
use App\Models\InvoiceModel;
use App\Models\CustomeresModel;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoices_list(Request $request){
        $data['getRecord'] = InvoiceModel::get();
        return view('admin.invoices.list', $data);
    }

    public function add_invoices(Request $request){
        $data['getRecord'] = CustomeresModel::get();
        return view('admin.invoices.add', $data);
    }

    public function insert_add_invoices(Request $request){
        $save = new InvoiceModel;
        $save->customers_id = trim($request->customers_id);
        $save->net_total = trim($request->net_total);
        $save->invoices_date = trim($request->invoices_date);
        $save->total_amount = trim($request->total_amount);
        $save->total_discount = trim($request->total_discount);
        
        $save->save();

        return redirect('admin/invoices')->with('success', 'Invoice successfully created');
        
    }

    public function EditInvoices($id){
        $data['getRecord'] = CustomeresModel::get();
        $data['oldRecord'] = InvoiceModel::find($id);
        return view('admin.invoices.edit', $data);
     
     }

     public function UpdateInvoices(Request $request, $id){
    
        $update =   InvoiceModel::find($id)->update([
               'customers_id' => $request->customers_id,
               'net_total' => $request->net_total,
               'invoices_date' => $request->invoices_date,
               'total_amount' => $request->total_amount,
               'total_discount' => $request->total_discount,
               
              
                      
           ]);
           return redirect('admin/invoices')->with('success','Invoice Updated succcessfully');
        
        }

        public function DeleteInvoices($id){
            $delete = InvoiceModel::find($id)->Delete();
            return Redirect()->back()->with('success','Invoice Deleted succcessfully');
         }


}
