<?php

namespace Kata\Tests;

use Kata\StringCalculator;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function test_add()
    {
        $kata = new StringCalculator();
        $val = $kata->calc('1+1');
        $this->assertEquals($val, 2);
    }
}
