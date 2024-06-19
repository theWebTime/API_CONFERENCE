<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;

class PaymentReceiptMail extends Mailable
{
    use Queueable, SerializesModels;

    public $transactionId;
    public $amount;
    public $conferenceName;
    public $planName;
    public $date;

    public function __construct($transactionId, $amount, $conferenceName, $planName, $date)
    {
        $this->transactionId = $transactionId;
        $this->amount = $amount;
        $this->conferenceName = $conferenceName;
        $this->planName = $planName;
        $this->date = $date;
    }

    public function build()
    {
        $pdf = PDF::loadView('emails.payment-receipt-pdf', [
            'transactionId' => $this->transactionId,
            'amount' => $this->amount,
            'conferenceName' => $this->conferenceName,
            'planName' => $this->planName,
            'date' => $this->date,
        ]);

        return $this->view('emails.payment-receipt')
                    ->with([
                        'transactionId' => $this->transactionId,
                        'amount' => $this->amount,
                        'conferenceName' => $this->conferenceName,
                        'planName' => $this->planName,
                        'date' => $this->date,
                    ])
                    ->attachData($pdf->output(), 'payment_receipt.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
