<?php

namespace App\Mail;

use App\Models\FeedbackMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendFeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public FeedbackMessage $feedbackMessage)
    {
        //
    }

    public function envelope(): Envelope
    {
        $mailFrom = config('app.email_admin');
        $nameFrom = config('app.name');
        return new Envelope(
            from: new Address($mailFrom, $nameFrom),
            subject: 'Заявка Обратная связь',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.feedback'
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
