<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Technicien;

class SendNotification extends Notification
{





      use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     protected $technicien;

    /**
     * Create a new notification instance.
     *
     * @param $token
     */
    public function __construct(Technicien $technicien)
    {
        $this->technicien = $technicien;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'A new user was added on Laravel News.',
            'id' => $this->technicien->id,
            'name' => $this->technicien->name,
        ];
    }
}
