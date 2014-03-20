<?php

namespace NinetyNine\Bundle\ReplBundle\Tests;

use NinetyNine\Bundle\ReplBundle\ReplBundle;
use PHPUnit_Framework_TestCase as TestCase;

class ReplBundleTest extends TestCase
{
    public function testBundle()
    {
        // There's no useful way to test this; just check that it loads and compiles
        new ReplBundle();
    }
}
