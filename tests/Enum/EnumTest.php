<?php

namespace EmbarkNow\Tests\ValueObjects\Enum;

use EmbarkNow\Tests\ValueObjects\TestCase;

class EnumTest extends TestCase
{
    public function testSameValueAs()
    {
        $stub1 = $this->getMock('EmbarkNow\ValueObjects\Enum\Enum', array(), array(), '', false);
        $stub2 = $this->getMock('EmbarkNow\ValueObjects\Enum\Enum', array(), array(), '', false);

        $stub1->expects($this->any())
              ->method('sameValueAs')
              ->will($this->returnValue(true));

        $this->assertTrue($stub1->sameValueAs($stub2));
    }

    public function testToString()
    {
        $stub = $this->getMock('EmbarkNow\ValueObjects\Enum\Enum', array(), array(), '', false);

        $this->assertEquals('', $stub->__toString());
    }
}
