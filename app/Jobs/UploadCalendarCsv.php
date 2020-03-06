<?php

namespace App\Jobs;

use App\AcademicCalendar;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class UploadCalendarCsv implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Redis::throttle('upload-csv')->allow(1)->every(5)->then(function () {
            // Job logic...
            dump('Proccessing this file:---', $this->file);

            $data = array_map('str_getcsv', file($this->file));
            foreach($data as $row)
            {
                AcademicCalendar::updateOrCreate([
                    'week' => $row[0]
                ],[
                    'activity' => $row[1],
                    'start' => $row[2],
                    'end' => $row[3]
                ]);
            }

            dump('Done proccessing this file:---', $this->file);

            unlink($this->file);
        }, function () {
            // Could not obtain lock...
            return $this->release(1);
        });
    }
}
