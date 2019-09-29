<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class first extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'first {name1=pradip} {--s|second=karan?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is first command';

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
        

       /*$name=$this->argument('name1');
        $lastname = $this->option('second');
        $this->info($name. ' ' .$lastname); 

        ->
        $name = $this->ask('What is your name');
        $confirm = $this->confirm('Do you want confirm ?');
        if($confirm)
        {
            $this->info($name);
        }

        $header = ['name','email'];
        $user = User::select('name','email')->get();
        $this->table($header);

        */

    }
}
