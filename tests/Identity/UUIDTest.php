<?php

namespace EmbarkNow\Tests\ValueObjects\Identity;

use EmbarkNow\ValueObjects\Identity\UUID;
use EmbarkNow\Tests\ValueObjects\TestCase;

class UUIDTest extends TestCase
{
    public function testGenerateAsString()
    {
        $uuidString = UUID::generateAsString();

        $this->assertRegexp('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/', $uuidString);
    }

    public function testFromNative()
    {
        $uuid1 = new UUID();
        $uuid2 = UUID::fromNative($uuid1->toNative());

        $this->assertTrue($uuid1->sameValueAs($uuid2));
    }

    public function testSameValueAs()
    {
        $uuid1 = new UUID();
        $uuid2 = clone $uuid1;
        $uuid3 = new UUID();

        $this->assertTrue($uuid1->sameValueAs($uuid2));
        $this->assertFalse($uuid1->sameValueAs($uuid3));

        $mock = $this->getMock('EmbarkNow\ValueObjects\ValueObjectInterface');
        $this->assertFalse($uuid1->sameValueAs($mock));
    }

    /** @expectedException EmbarkNow\ValueObjects\Exception\InvalidNativeArgumentException */
    public function testInvalid()
    {
        new UUID('invalid');
    }
}
