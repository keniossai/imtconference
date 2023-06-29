<?php

namespace App\Mail;

use App\Models\Exhibition;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubmitExhibitionForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public Exhibition $exhibitor)
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            to: ['pearlygatesassocLP@nigerianbar.ng','ayodeji.oni@nigerianbar.org.ng'],
            bcc: ['tochukwu@krystalng.com'],
            subject: "NBA Conference 2023 Exhibitors Form - {$this->exhibitor->company_name}",
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.exhibitor',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
       return [
           Attachment::fromStorage($this->exhibitor->payment_invoice)
            ->as("{$this->exhibitor->company_name}_proof_of_payment.pdf")
           ->withMime('application/pdf'),

       ];
    }
}
