<?php

namespace App\Console;

use App\Http\Controllers\ScheduledTask;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(fn () => ScheduledTask::clean_client_logs())->lastDayOfMonth('15:00');
        $schedule->call(fn () => ScheduledTask::update_activity())->everyMinute();
        $schedule->call(fn () => ScheduledTask::add_monthly_income())->monthly();
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
