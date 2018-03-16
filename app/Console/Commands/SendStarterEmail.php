<?php

namespace App\Console\Commands;

use App\Jobs\SendReminderEmail;
use App\Models\Reservation;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use TCG\Voyager\Models\Setting;

class SendStarterEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'starter:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email to customer advanced';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = [];
        $now = Carbon::now();
        $reservations = Reservation::all();
        $interval = (int) Setting::where('key', 'advance.time')->first()->value;
        foreach ($reservations as $reservation) {
            if ($reservation->reservation_start == $now->subMinute($interval)) {
                $email[] = User::find($reservation->user_id)->email;
            }
        }
        $job = (new SendReminderEmail($email))->onConnection('database')->onQueue('emails');
        dispatch($job);
    }
}
