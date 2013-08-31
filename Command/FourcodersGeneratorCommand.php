<?php
namespace Fourcoders\Bundle\CrudgenerateBundle\Command;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand;
use Fourcoders\Bundle\CrudgenerateBundle\Generator\DoctrineCrudGeneratorCustom;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;


class FourcodersGeneratorCommand extends GenerateDoctrineCrudCommand
{

    protected $generator;

    protected function configure()
    {
        parent::configure();

        $this->setName('fourcoders:generate:crud');
        $this->setDescription('My Crud generate');

    }

    protected function getGenerator(BundleInterface $bundle = null)
    {
        $skeletonDirs[] = __DIR__.'/../Resources/skeleton';
        $skeletonDirs[] = __DIR__.'/../Resources';
      //  if (null === $this->generator) {
            $this->generator = $this->createGenerator();
            $this->generator->setSkeletonDirs($skeletonDirs);
       // }

        return $this->generator;
    }


}

