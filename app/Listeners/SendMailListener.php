<?php

namespace App\Listeners;

use App\Events\SendEmailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMailListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendEmailEvent  $event
     * @return void
     */
    public function handle(SendEmailEvent $event)
    {
        $mail_data = $event->mail_data;

        $email = new Mail();
        $email->setFrom("devsupport@ihrbuddy.com", "Support");
        $email->setSubject("I'm replacing the subject tag");
        $email->addTo(
            "joshuasaubon@gmail.com",
            "Joshua Saubon",
            [
                "name" => "Test Joshua",
            ],
            0
        );
        $email->setTemplateId("d-7b75b67cbc7b4a1cbf2f7dfb53115686");
        $sendgrid = new \SendGrid(env('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            dd('Caught exception: '.  $e->getMessage());
        }
    }
}
