<?php

namespace EmbarkNow\Tests\ValueObjects\DateTime;

use EmbarkNow\Tests\ValueObjects\TestCase;
use EmbarkNow\ValueObjects\DateTime\Second;

class SecondTest extends TestCase
{
    public function testFromNative()
    {
        $fromNativeSecond = Second::fromNative(13);
        $constructedSecond = new Second(13);

        $this->assertTrue($fromNativeSecond->sameValueAs($constructedSecond));
    }

    public function testNow()
    {
        $second = Second::now();
        $this->assertEquals(\intval(date('s')), $second->toNative());
    }

    /** @expectedException EmbarkNow\ValueObjects\Exception\InvalidNativeArgumentException */
    public function testInvalidSecond()
    {
        new Second(60);
    }
}
