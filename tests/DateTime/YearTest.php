<?php

namespace EmbarkNow\Tests\ValueObjects\DateTime;

use EmbarkNow\Tests\ValueObjects\TestCase;
use EmbarkNow\ValueObjects\DateTime\Year;

class YearTest extends TestCase
{
    public function testNow()
    {
        $year = Year::now();
        $this->assertEquals(date('Y'), $year->toNative());
    }
}
