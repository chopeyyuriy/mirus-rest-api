<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignUpSend extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $pass;
    public $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $pass, $title)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->user->email)->view('mail.email', ['user' => $this->user, 'pass' => $this->pass, 'title' => $this->title]);
    }
}
