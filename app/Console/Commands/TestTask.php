<?php

namespace App\Console\Commands;

use App\Facades\Aes;
use App\Facades\ApiToken;
use Illuminate\Console\Command;

class TestTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $encode = Aes::encode('123123123');
        $this->info($encode);
        $decode = Aes::decode($encode);
        $this->info($decode);
    }
}
