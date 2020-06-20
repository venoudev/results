<?php

namespace Venoudev\Results\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallResources extends Command
{
    protected $signature = 'results:install-resources';
    protected $description = 'Install or Update langs resources for Venoudev/Results';

    public function handle()
    {
        $this->info('');
        $this->info('Venoudev/Results - venoudev.com');
        $this->info('');
        $this->info('Installing....');
        Artisan::call('vendor:publish' , [
            '--provider' => 'Venoudev\Results\ResultsServiceProvider'
        ]);

        $this->info('');
        $this->info('Resources installed, whit love VenouDev. Be Awesome :)!');
        $this->info('');
    }
}
