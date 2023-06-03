<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class migrateCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrate-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate categories';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
    }
}
