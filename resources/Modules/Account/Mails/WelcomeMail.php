<?php

namespace Raid\Core\Modules\Account\Mails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Raid\Core\Modules\Account\Models\Account;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Account instance.
     */
    private Account $account;

    /**
     * Create a new message instance.
     */
    public function __construct(Account $account)
    {
        $this->account = $account;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address($this->account('email'), $this->account('name')),
            ],
            subject: 'Welcome Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'welcome',
            with: $this->getData(),
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [
            //        Attachment::fromPath('/path/to/file'),
        ];
    }

    /**
     * Get the data for the message.
     */
    private function getData(): array
    {
        return [
            'id' => $this->account('id'),
            'name' => $this->account('name'),
        ];
    }

    /**
     * Get account instance or value by given key.
     */
    private function account(string $key = null, mixed $default = null): mixed
    {
        return access_object($this->account, $key, $default);
    }
}
