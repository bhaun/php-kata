<?php
namespace Kata\Tests;

use Kata\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function test_sum_fibo_less_4M()
    {
        $kata = new Kata();
        $val = $kata->kata();
        $this->assertEquals($val, 4613732);
    }

}
