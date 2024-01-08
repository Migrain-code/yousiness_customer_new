<?php

namespace App\Jobs;

use App\Models\AppointmentServices;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class AppointmentControlJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $services = AppointmentServices::whereNotIn('status', [8, 0])
            ->where('start_time', Carbon::now()->format('d.m.y H:i'))
            ->get();
        foreach ($services as $service){
            $service->status = 4;
            $service->save();
            $appointment =$service->appointment;
            $appointment->status = 0;
            $appointment->save();
        }
    }
}
