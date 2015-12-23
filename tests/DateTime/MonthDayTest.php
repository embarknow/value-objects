<?php

namespace EmbarkNow\Tests\ValueObjects\DateTime;

use EmbarkNow\Tests\ValueObjects\TestCase;
use EmbarkNow\ValueObjects\DateTime\MonthDay;

class MonthDayTest extends TestCase
{
    public function fromNative()
    {
        $fromNativeMonthDay = MonthDay::fromNative(15);
        $constructedMonthDay = new MonthDay(15);

        $this->assertTrue($fromNativeMonthDay->sameValueAs($constructedMonthDay));
    }

    public function testNow()
    {
        $monthDay = MonthDay::now();
        $this->assertEquals(date('j'), $monthDay->toNative());
    }

    /** @expectedException EmbarkNow\ValueObjects\Exception\InvalidNativeArgumentException */
    public function testInvalidMonthDay()
    {
        new MonthDay(32);
    }
}
