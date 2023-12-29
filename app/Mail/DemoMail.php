<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    public $price;
    public $emptyArray;
    public $route;
    public $busname;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData,$price,$emptyArray,$route,$busname)
    {
        $this->mailData = $mailData;
        $this->price = $price;
        $this->emptyArray = $emptyArray;
        $this->route = $route;
        $this->busname = $busname;
       
        
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    /*public function envelope()
    {
        return new Envelope(
            subject: 'Demo Mail',
        );
    }*/

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
   /* public function content()
    {
        return new Content(
            view: 'view.name',
        );
    }*/

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
   /* public function attachments()
    {
        return [];
    }*/

 
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
   
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from slebgroup10@gmail.com')
                    ->view('email.demoMail');
    }
}
