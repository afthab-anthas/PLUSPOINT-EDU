<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class registration_mail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailmessage;
    public $subject;
    public $mailrole;
    /**
     * Create a new message instance.
     */
    public function __construct($mailmessage, $subject, $mailrole)
    {
        $this->mailmessage = $mailmessage;
        $this->subject = $subject;
        $this->mailrole = $mailrole;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.register-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
