<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class QuestionNotification extends Notification
{
    use Queueable;
    protected $email;
    protected $name;
    protected $number;
    protected $message;

    /**
     * Create a new notification instance.
     */
    public function __construct($email,$name,$number,$message)
    {
        $this->email=$email;
        $this->name=$name;
        $this->number=$number;
        $this->message=$message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
               ->subject('Question')
               ->greeting($this->name)
               ->line($this->message)
               ->line($this->number)
               ->line($this->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
