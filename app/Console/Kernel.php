<?php

namespace App\Console;

use App\Jobs\SendReminderEmail;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use TCG\Voyager\Models\Setting;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
//        Commands\SendStarterEmail::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
//        $time = [];
//        $times = Reservation::select('reservation_start')->get();
//        $interval = (int) Setting::where('key', 'advance.time')->first()->value;
//        $now = Carbon::now()->subMinutes($interval);
//        foreach ($times as $a) {
//            $b = Carbon::create($a)->subMinutes($interval);
//            $time[] = $b;
//            if ($now >= ($b)) {
//                array_splice($time, $a, 1);
//            }
//        }
//        $schedule->command('starter:email')->at($time);
        $schedule->job(new SendReminderEmail())->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
