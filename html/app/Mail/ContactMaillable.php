<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMaillable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "CONTACTO INGENERO";
    public $contact;
    /**
     * Crear un nuevo mensaje
     */
    public function __construct($contact)
    {
        {$this->contact = $contact;}
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Maillable',
        );
    }

    /**
     * Crear el contenido del correo
     */
    public function content(): Content
    {
        return new Content(
            view: 'contact-email',
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
