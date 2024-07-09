<?php

namespace App\Console;

use App\Mail\PostMailCount;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();

        // $schedule->call(function(){
        //     User::where('is_active',0)->delete();
        // })->monthly();

        // $schedule->call(function(){
        //     User::where('type',0)->update(['attendence_notification' => 'Ensure You In time']);
        // })->dailyAt('09:00');

        // $schedule->call(function(){
        //     User::where('type',0)->update(['attendence_notification' => 'Ensure You Out time']);
        // })->dailyAt('18:00');

        $schedule->call(function(){
            Mail::to('nurulcse09@gmail.com')->send(new PostMailCount());
        })->everyFiveMinutes();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
