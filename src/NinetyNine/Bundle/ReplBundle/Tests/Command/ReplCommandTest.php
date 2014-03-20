<?php

namespace NinetyNine\Bundle\ReplBundle\Tests\Commands;

use NinetyNine\Bundle\ReplBundle\Command\ReplCommand;
use PHPUnit_Framework_TestCase as TestCase;

class ReplCommandTest extends TestCase
{
    public function testCommand()
    {
        // There's no useful way to test this; just check that it loads and compiles
        new ReplCommand();
    }
}
