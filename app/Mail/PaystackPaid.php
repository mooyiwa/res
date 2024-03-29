<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Account;

class PaystackPaid extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'mail@peinmoney.com';
        $name = 'Peinmoney';
        $subject = 'Your Peinmoney Investment';

        //today / start
        $start = date('Y-m-d');

        $details = Account::where([
            ['username',session()->get('logged')],
            ['asset',session()->get('asset')],
            ['credit',session()->get('amount')],
            ['start',$start],
            ])->first();

        return $this->markdown('emails.paystacked', compact('details'))
        ->from($address, $name)
        ->replyTo($address, $name)
        ->subject($subject);
    }
}
