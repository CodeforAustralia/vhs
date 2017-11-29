<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewLetter extends Notification
{
    use Queueable;

    protected $letter;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($letter, $user)
    {
        //
        $this->letter = $letter;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    // ->view('mail/newLetter')
                    // Greeting
                    ->greeting('Hello ' .$this->user['firstName'].',')
                    // Subject line
                    ->subject('You have a new letter')
                    // Paragraph
                    ->line('You have a new letter in the Housing Services Victoria Portal.')
                    // Uncomment if needed some buttons in the page
                    // ->action('Actionable Item', url('/'))
                    // Second Praragraph
                    ->line('Please log into your account to access your mail.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
