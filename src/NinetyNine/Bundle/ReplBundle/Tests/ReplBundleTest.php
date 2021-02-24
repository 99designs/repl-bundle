<?php

namespace NinetyNine\Bundle\ReplBundle\Tests;

use NinetyNine\Bundle\ReplBundle\ReplBundle;
use PHPUnit\Framework\TestCase;

class ReplBundleTest extends TestCase
{
    public function testBundle()
    {
        // There's no useful way to test this; just check that it loads and compiles
        $bundle = new ReplBundle();
        $this->assertNotEmpty($bundle);
    }
}
