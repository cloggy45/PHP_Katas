<?php

include '../src/predictYourAge/Kata.php';

use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{

    public function testPredictAge()
    {
        $kata = new Kata();
        $this->assertEquals(86, $kata->predictAge(65,60,75,55,60,63,64,45));
        $this->assertEquals(79, $kata->predictAge(32,54,76,65,34,63,64,45));
    }
}
