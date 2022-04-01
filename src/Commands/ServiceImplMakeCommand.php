<?php 

namespace Venoudev\Results\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class ServiceImplMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Service class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service Implementation';


    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {   

        if (parent::handle() === false && ! $this->option('force')) {
            return false;
        }
       
    }


    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->resolveStubPath('/../Stubs/service-impl.stub');
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {  
        $interfaz_name = class_basename($name);
        $slice = Str::before($interfaz_name, 'Impl');
        $path_interface = Str::beforeLast(Str::beforelast($name, 'Services').'Contracts'.Str::afterlast($name, 'Services'),'\\');
        $replace = [
            '{{ class }}' => $name,
            '{{ interface }}' => $slice,
            '{{ path_interface }}' => $path_interface,
        ];
        return str_replace(
            array_keys($replace), array_values($replace), parent::buildClass($name)
        );
    }

    /**
     * Parse the class name and format according to the root namespace.
     *
     * @param  string  $name
     * @return string
     */
    protected function qualifyClass($name)
    {
        $name = ltrim($name, '\\/');

        $rootNamespace = $this->rootNamespace();

        if (Str::startsWith($name, $rootNamespace)) {
            return $name;
        }

        $name = str_replace('/', '\\', $name);
        
        return $this->qualifyClass(
            $this->getDefaultNamespace(trim($rootNamespace, '\\')).'\\'.$name
        );
    }
    /**
    * Get the desired class name from the input.
    *
    * @return string
    */
    protected function getNameInput()
    {   
        return trim($this->argument('name').'Impl');
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
         return $rootNamespace.'\Services';
     }

    
    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['contract', 'c', InputOption::VALUE_NONE, 'Create a new contract for the service'],
            ['force', 'f', InputOption::VALUE_NONE, 'Create the class even if the model already exists'],
        ];
    }
}