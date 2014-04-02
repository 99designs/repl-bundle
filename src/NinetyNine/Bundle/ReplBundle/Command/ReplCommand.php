<?php

namespace NinetyNine\Bundle\ReplBundle\Command;

use Boris\Boris;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Start a Boris (https://github.com/d11wtq/boris) REPL
 */
class ReplCommand extends ContainerAwareCommand
{
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

        $container = $this->getContainer();

        $boris = new Boris('php> ');
        $boris->setLocal(array(
            'container' => $container,
            'kernel' => $container->get('kernel'),
        ));
        $boris->start();
    }
}
