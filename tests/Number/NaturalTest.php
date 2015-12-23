<?php

namespace EmbarkNow\Tests\ValueObjects\Number;

use EmbarkNow\ValueObjects\Number\Natural;
use EmbarkNow\Tests\ValueObjects\TestCase;

class NaturalTest extends TestCase
{
    /** @expectedException EmbarkNow\ValueObjects\Exception\InvalidNativeArgumentException */
    public function testInvalidNativeArgument()
    {
        new Natural(-2);
    }
}
