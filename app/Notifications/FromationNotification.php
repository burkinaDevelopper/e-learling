<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\{
    User, Course
};
class FromationNotification extends Notification
{
    use Queueable;

    protected User $user;
    protected Course $course;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user,Course $course)
    {
        $this->user=$user;
        $this->course=$course;
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
                ->subject('Achat de formation')
                ->greeting($this->user->name." veux s'inscrit a la formation")
                ->line("formation choisi: ".$this->course->cours)
                ->line("Pays: ".$this->course->country)
                ->line("Occupations: ".$this->course->status)
                ->line('Merci pour votre confiance');
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
