<?php

namespace App\Mail;

use App\Models\Alumni;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AlumniRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $alumni;

    public function __construct(Alumni $alumni)
    {
        $this->alumni = $alumni;
    }

    public function build()
    {
        return $this->view('emails.alumni.registration');
    }
}
