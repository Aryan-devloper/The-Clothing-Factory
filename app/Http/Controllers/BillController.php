<?php
namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Shopping;


class BillController extends Controller
{
    public function generateBill($order_id)
    {    
        $products = Shopping::where('order_id', $order_id)->first();
        
        if (!$products) {
            return redirect()->back()->with('error', 'Order not found!');
        }
        $directory=public_path('billes');
        $filePath=$directory . '/Invoice_Order_' . $order_id . '.pdf';
        $pdf = Pdf::loadView('invoice', compact('products'));
        $pdf->save($filePath);
       
        return $pdf->download('Invoice_Order_' . $order_id . '.pdf');
    }
    
}
