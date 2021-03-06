<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Sichikawa\LaravelSendgridDriver\SendGrid;

class DeployEmail extends Mailable
{
    use Queueable, SerializesModels, SendGrid;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->markdown('emails.deploy');
        return $this
            ->markdown('emails.deploy')
            ->subject('Deploy Email')
//            ->from('from@example.com')
//            ->to(['to@example.com'])
            ->sendgrid([
                'personalizations' => [
                    [
                        'substitutions' => [
                            ':myname' => 'deploy laravel',
                        ],
                    ],
                ],
            ]);
    }
}
