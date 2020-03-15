<?php

namespace App\Jobs;

use App\SemesterRegcourse;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class UploadCsvOption implements ShouldQueue
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
                SemesterRegcourse::updateOrCreate([
                    'course_code'      =>       $row[0]
                ],[
                    'course_name'      =>       $row[1],
                    'credit_hours'     =>       $row[2],
                    'semester'         =>       $row[3],
                    'level'            =>       $row[4],
                    'admission_type'   =>       $row[5],
                    'stream'           =>       $row[6],
                    'programeOption'   =>       $row[7],
                    'program'          =>       $row[8],
                    'academicYear'     =>       $row[9]
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
