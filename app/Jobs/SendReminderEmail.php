<?php

namespace App\Jobs;

use App\Console\Commands\SendStarterEmail;
use App\Models\Reservation;
use App\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Setting;

class SendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = [];
        $now = Carbon::now();
        $interval = (int) Setting::where('key', 'advance.time')->first()->value;
        $reservations = Reservation::all()->where('reservation_start', $now->addMinutes($interval));
//        var_dump($reservations);
        foreach ($reservations as $reservation) {
            $email[] = User::find($reservation->user_id)->email;
        }

        Mail::queue('emails.tips', [], function ($mail) use ($email) {
            $mail -> to($email)
                ->from('249834096@qq.com')
                ->subject('Remind Email');
        })->send(new SendStarterEmail());
    }
}
