<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;
    private $order;
    /**
     * Create a new notification instance.
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' =>
                "new order ID: " . $this->order->order_id . " has been placed ",
            'order_id' => $this->order->order_id,
            'action' => route('order-details.show', ['order_detail' => $this->order->order_id]),
        ];
    }
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line("New order ID: " . $this->order->order_id . " has been placed.")
            ->action('View Order', route('orders.index'))
            ->line('Thank you for using our application!');
    }
}
