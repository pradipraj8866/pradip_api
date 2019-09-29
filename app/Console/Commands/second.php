<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class second extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'second';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'second Function';

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
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
