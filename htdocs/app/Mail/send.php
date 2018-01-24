<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class send extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $name_to;
    private $confirmation_code;



    public function __construct($name_to,$confirmation_code)
    {
        //
        $this->name_to              = $name_to;
        $this->confirmation_code    =$confirmation_code;

        //dd($this->name_to);

    }

   // public $name;
    //public $confirmation_code;
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        //$this->withSwift();

        return $this->subject('Confirmacion de registro')
        ->view('auth.passwords.confirmation')
        ->with('name',$this->name_to)
        ->with('confirmation_code',$this->confirmation_code);
    }
}
