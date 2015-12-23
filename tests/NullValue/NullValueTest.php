<?php

namespace EmbarkNow\Tests\ValueObjects\NullValue;

use EmbarkNow\Tests\ValueObjects\TestCase;
use EmbarkNow\ValueObjects\NullValue\NullValue;

class NullValueTest extends TestCase
{
    /** @expectedException \BadMethodCallException */
    public function testFromNative()
    {
        NullValue::fromNative();
    }

    public function testSameValueAs()
    {
        $null1 = new NullValue();
        $null2 = new NullValue();

        $this->assertTrue($null1->sameValueAs($null2));
    }

    public function testCreate()
    {
        $null = NullValue::create();

        $this->assertInstanceOf('EmbarkNow\ValueObjects\NullValue\NullValue', $null);
    }

    public function testToString()
    {
        $foo = new NullValue();
        $this->assertSame('', $foo->__toString());
    }
}
