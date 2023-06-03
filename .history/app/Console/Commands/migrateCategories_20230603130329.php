<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $time_start = microtime(true);
        $i = 0;
        $users = User::select('old_db_id', 'id')->get();
        //$blogCategories = BlogCategory::select('id', 'category')->get();
        //dd($blogCategories);

        DB::connection('remote')->table('availability')->where('instock', 0)->orderBy('availability', 'asc')
        ->chunk(500, function ($availability) use ($time_start,  &$i) {
            $bar = $this->output->createProgressBar(count($articleinfo));
            $data = [];
            $new_base_path = '';
            foreach ($availability as $b) {
                $i++;
          

                $data[] = [
                    'name' => $b->name,
                    
                ];

                $bar->advance();
            }
            $bar->finish();
            try {
                $this->newLine();
                $this->line('Data are inserting');
                print_r($data);
              
                $time_end = microtime(true);
                $execution_time = number_format(($time_end - $time_start) / 60, 1);
                $this->line('Execution Time till now: ' . $execution_time . ' Mins');
                $this->newLine();
            } catch (\Exception $e) {
                dd($b->Id, $e->getMessage());
            }
        });
        $this->newLine();
        $this->line($i . ' blogposts inserted in the new system');

        // Display Script End time
        $time_end = microtime(true);
        //dividing with 60 will give the execution time in minutes
        $execution_time = number_format(($time_end - $time_start) / 60, 1);

        //execution time of the script
        $this->newLine();
        $this->info('Total Execution Time: ' . $execution_time . ' Mins');
    }
}
