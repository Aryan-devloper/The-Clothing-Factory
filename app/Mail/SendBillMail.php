<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use App\Models\Shopping;
use Illuminate\Queue\SerializesModels;

class SendBillMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfPath;
    public $products;

    public function __construct(Shopping $products, $pdfPath)
    {
        $this->pdfPath = $pdfPath; 
        
        $this->products = $products;
    }

    public function build()
    {
        return $this->from('aryandobariya347@gmail.com', 'Admin') 
        
            ->subject('Your Bill - ID :' . $this->products->order_id)
            ->view('invoice') 
            ->attach($this->pdfPath, [  
                'as' => 'invoice.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
