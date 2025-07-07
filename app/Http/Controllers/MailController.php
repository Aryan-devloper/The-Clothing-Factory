<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMail;

class MailController extends Controller
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
    }
}
