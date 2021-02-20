<?php

namespace Kkobold\DevHelper\Commands;

use Illuminate\Console\Command;

class Clear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear compiled, routes, view and config';

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
        $this->call('clear-compiled');
        $this->call('route:clear');
        $this->call('view:clear');
        $this->call('config:clear');

        return 0;
    }
}
