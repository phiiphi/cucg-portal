<?php

namespace App\Jobs;

use App\Course;
use App\SemesterRegcourse;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class UploadCsv implements ShouldQueue
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
                    'course_name'      =>       $row[0],
                    'semester'         =>       $row[1],
                    'programOption'    =>       $row[2],
                    'programeOption'   =>       $row[3],
                    'program'          =>       $row[4],
                    'academicYear'     =>       $row[5],
                    'level'            =>       $row[6],
                    'admission_type'   =>       $row[7],
                    'stream'           =>       $row[8]

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
