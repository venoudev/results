<?php 

namespace Venoudev\Results\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ServiceContractMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:contract';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Contract interface';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service Contract';

    /**
     * Execute the console command.
     *
     * @return void
     */

    protected $route_contracts = '\Services\Contracts';

    public function handle()
    {
        if (parent::handle() === false && ! $this->option('force')) {
            return false;
        }
    }

    /**
    * Get the desired class name from the input.
    *
    * @return string
    */
    protected function getNameInput()
    {   
        return trim($this->argument('name').'Service');
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->resolveStubPath('/../Stubs/service-contract.stub');
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
                        ? $customPath
                        : __DIR__.$stub;
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
     protected function getDefaultNamespace($rootNamespace)
     {
         return $rootNamespace.$this->route_contracts;
     }
    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['force', 'f', InputOption::VALUE_NONE, 'Create the contract even if the model already exists'],
            ['service', 's', InputOption::VALUE_NONE, 'Create the contract even if the model already exists'],
        ];
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {   
        return [
            ['name', InputArgument::REQUIRED, 'The name of the class'],
            ['path_interface', InputArgument::OPTIONAL, 'The path of custom interface'],
        ];
       
    }
}