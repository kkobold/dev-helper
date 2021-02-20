<?php

namespace Kkobold\DevHelper\Commands;

use Illuminate\Console\Command;

class Helper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:helper';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Ide Helpers';

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
        if(app()->environment() !== "local")
            return 0;

        $this->call('ide-helper:generate', [
            '--write_mixins' => true,
        ]);
        $this->call('ide-helper:eloquent');
        $this->call('ide-helper:models', [
            '--write' => true,
            '--phpstorm-noinspections' => true,
        ]);
        $this->call('ide-helper:meta');

        return 0;
    }
}
