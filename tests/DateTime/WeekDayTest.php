<?php

namespace EmbarkNow\Tests\ValueObjects\DateTime;

use EmbarkNow\Tests\ValueObjects\TestCase;
use EmbarkNow\ValueObjects\DateTime\WeekDay;

class WeekDayTest extends TestCase
{
    public function testNow()
    {
        $weekDay = WeekDay::now();
        $this->assertEquals(date('l'), $weekDay->toNative());
    }

    public function testFromNativeDateTime()
    {
        $nativeDateTime = new \DateTime();
        $nativeDateTime->setDate(2013, 12, 14);

        $weekDay = WeekDay::fromNativeDateTime($nativeDateTime);

        $this->assertEquals('Saturday', $weekDay->toNative());
    }

    public function testGetNumericValue()
    {
        $weekDay = WeekDay::SATURDAY();

        $this->assertEquals(6, $weekDay->getNumericValue());
    }
}
