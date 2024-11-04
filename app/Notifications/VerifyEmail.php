<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailNotification;

class VerifyEmail extends VerifyEmailNotification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail( $notifiable): MailMessage
    {

        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
                    ->line('Verifikasi Email Anda')
                    ->action('Klik untuk Verifikasi', $verificationUrl)
                    ->line('Terimakasih telah Mengunjungi KURSUS KITA!');
    }

    protected function verificationUrl($notifiable){
        return route('verification.verify',[
            'id' => $notifiable->getKey(),
            'hash' => sha1($notifiable->getEmailForVerification())
        ]);
    }
}
