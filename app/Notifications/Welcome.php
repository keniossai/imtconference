<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class Welcome extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
       $notifiable->assignRegNumber(); // to make sure every reg_number is generate before sending the mail

        return (new MailMessage)
            ->subject("IMT Conference 2023 - Confirmation of Registration")
            ->greeting("Dear $notifiable->name")
            ->line("Thank you for registering for the Insurance Meets Tech 2023 Conference with the theme;
                **Unlocking policy and tech bottlenecks hindering disruptive insurance penetration**, scheduled to hold from Thursday, the 28th of September to Saturday, 29th September 2023 in Civic Center Victoria Island, Lagos.")
            ->when($notifiable->isAttendingVirtually(), function ($message) {

                $message->line("Please note that it will be a Physical Conference and further details about the Conference such as Programme, Speakers, etc. can be found via the IMT Conference website."
                );
            }, function ($message) use ($notifiable) {

                $message->line("Your registration category is **{$notifiable->category}**.")
                    ->line("Please note that it will be a Physical Conference and as a physical delegate, you will be
                    required to show this mail and an official photo identification of yourself in order to collect
                    your Conference materials. Also, further details about the Conference such as Programme,
                    Speakers, etc. can be found via the IMT Conference website."
                );
            })
            ->line("On behalf of the Technical Committee on Conference Planning (MODION) for the IMT 2023
                Annual General Conference, I look forward to welcoming you.")
            ->action('Visit the conference site', route('home'))
            ->salutation(new HtmlString("Modion Communications, Mr<br><small>ODION ALEOBA</small>"));
    }
}
