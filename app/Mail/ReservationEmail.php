<?php

namespace App\Mail;

use APP\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use TCG\Voyager\Models\Setting;

class ReservationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation, $setting;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation, Setting $setting)
    {
        $this->reservation = $reservation;
        $this->setting = $setting;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('249834096@qq.com')
            ->view('emails.reservation');
    }
}