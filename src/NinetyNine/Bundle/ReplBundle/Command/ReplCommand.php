<?php

namespace NinetyNine\Bundle\ReplBundle\Command;

use Boris\Boris;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Start a Boris (https://github.com/d11wtq/boris) REPL
 */
class ReplCommand extends Command
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('repl')
            ->setDescription('Start a REPL');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $application = $this->getApplication();
        $application->setCatchExceptions(false);
        $application->setAutoExit(false);

        $boris = new Boris('php> ');
        $boris->setLocal(array(
            'container' => $this->container,
            'kernel' => $this->container->get('kernel'),
        ));
        $boris->start();
    }
}
