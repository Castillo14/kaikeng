<?php

namespace App\Mail;

use App\Models\HelpRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AssistanceMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $help_request;

    /**
     * Create a new message instance.
     *
     * @param $help_request
     */
    public function __construct($help_request)
    {
        $this->help_request = $help_request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $results = HelpRequest::find($this->help_request);

        return $this->view('mail.assistance', compact('results'));
    }
}
