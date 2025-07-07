<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use App\Mail\AdminMail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Shopping;
use App\Mail\SendBillMail;

class AdminMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new AdminMail($details));

        return back()->with('success', 'Email sent successfully!');

        if (!view()->exists('emails.adminMail')) {
            return response()->json(['error' => 'Email view not found'], 500);
        }
        
    }

    public function sendbill($order_id)
    { 
        $products = Shopping::where('order_id', $order_id)->first();  
        

        $pdfPath = public_path('billes/Invoice_Order_' . $order_id . '.pdf');
    

        if (!File::exists($pdfPath)) {
            $directory=public_path('billes');
            $filePath=$directory . '/Invoice_Order_' . $order_id . '.pdf';
            $pdf = Pdf::loadView('invoice', compact('products'));
            $pdf->save($filePath);
        }
        
        
        Mail::to($products->email)->send(new SendBillMail($products, $pdfPath));
        return redirect()->back()->with('success', 'Bill sent successfully!');
    }
}
