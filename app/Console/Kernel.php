<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
<<<<<<< HEAD
        // Commands\Inspire::class,
=======
        Commands\Inspire::class,
>>>>>>> 80a808e0adfe82b37a87e3ec6525c40a7edd5050
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
<<<<<<< HEAD
        // $schedule->command('inspire')
        //          ->hourly();
=======
        $schedule->command('inspire')
                 ->hourly();
>>>>>>> 80a808e0adfe82b37a87e3ec6525c40a7edd5050
    }
}
