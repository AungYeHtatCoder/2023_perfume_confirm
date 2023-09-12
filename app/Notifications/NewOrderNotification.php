<?php

namespace App\Notifications;

use App\Models\Admin\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\User;
class NewOrderNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
   public $order;
   public $user;

    public function __construct(Order $order)
    {
        $this->order = $order;
       // $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        //return ['mail'];
        return ['database'];
    }

    public function toDatabase($notifiable)
{
    return [
        'order_id' => $this->order->id,
        'user_id'  => $this->order->user_id,
        'status'   => 'pending',
        'message'  => 'A new order has been placed.',
    ];
}

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
       return (new MailMessage)
            ->line('You have received a new order.')
            ->action('View Order', url('/orders/' . $this->order->id));
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