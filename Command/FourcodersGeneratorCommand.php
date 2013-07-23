<?php
namespace Fourcoders\Bundle\CrudgenerateBundle\Command;
use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand;
 
class FourcodersGeneratorCommand extends GenerateDoctrineCrudCommand
{
    protected $generator;
 
    protected function configure()
    {
        parent::configure();
 
        $this->setName('fourcoders:generate:crud');
        $this->setDescription('Fourcoders admin generator');
    }
}