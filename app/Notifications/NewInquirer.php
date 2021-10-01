<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Storage;

class NewInquirer extends Notification
{
    use Queueable;

    public $id;
    public $fio;
    public $phone;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($id, $fio, $phone)
    {
        $this->id = $id;
        $this->fio = $fio;
        $this->phone = $phone;
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
        $mail = (new MailMessage)
                    //->cc('pba@pbamail.ru')
                    ->subject('Опросник №'.$this->id.' с сайта bdodisigner.ru от '.$this->fio.' и телефоном '.$this->phone.'')
                    ->greeting('Здравствуйте!')
                    ->line('Ваш опросник сформирован')
                    ->line('Спасибо большое за Ваши ответы!')
                    ->line('В самое ближайшее время мы их обработаем и наши менеджеры свяжуться с Вами.')
                    ->attach(Storage::path('public/inquirers/'.$this->id.'/inquirer.docx'));
        $files = Storage::files('public/inquirers/'.$this->id.'/styles');
        foreach ($files as $file) {
          $mail->attach(Storage::path($file));
        }
        return $mail;
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
