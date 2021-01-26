<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Code2fa extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->code = $data['code'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $correo = $this->view('BM.auth.mails.confirmation_code')
                        ->with([
                            'code' => $this->code,
                        ])
                        ->to ($this->email, $this->name);
        return $correo;
    }
}
