<?php

namespace NinetyNine\Bundle\ReplBundle\Tests\Command;

use Mockery;
use NinetyNine\Bundle\ReplBundle\Command\ReplCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ReplCommandTest extends TestCase
{
    public function testCommand()
    {
        // There's no useful way to test this; just check that it loads and compiles
        $container = Mockery::mock(ContainerInterface::class);
        $command = new ReplCommand($container);
        $this->assertNotEmpty($command);
    }
}
