<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * ContactMail constructor.
     * Create a new message instance.
     * @param $name
     * @param $email
     * @param $phone
     * @param $department
     * @param $body
     */
    public function __construct($name, $email, $body)
    {
        $this->name = $name;
        $this->email = $email;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@spectailor.co')
            ->subject('Web İletişim')
            ->markdown('emails.contact')
            ->with(['name' => $this->name, 'email' => $this->email, 'body' => $this->body]);
    }
}
