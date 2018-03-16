<?php

namespace App\Mail;

use App\Models\Reservation;
use TCG\Voyager\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReservationFullEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation, $setting, $wait_time;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation, $setting, $wait_time)
    {
        $this->reservation = $reservation;
        $this->setting = $setting;
        $this->wait_time = $wait_time;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from('249834096@qq.com')
            ->view('emails.reservation_full');
    }
}
