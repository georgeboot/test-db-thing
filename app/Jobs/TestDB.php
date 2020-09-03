<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TestDB implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 60;

    public function handle()
    {
        // trigger a connection to the db
        User::all();

        info("its me on attempt {$this->attempts()}");

        // release the job with a small delay
        $this->release(15);
    }

    public function failed()
    {
        info('I failed life');
    }
}
