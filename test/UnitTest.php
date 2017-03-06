<?php

namespace Acme\Test;

use Acme\Unit;
use PHPUnit\Framework\TestCase;

class PartialMockTest extends TestCase
{
    public function testUnderTest()
    {
        $unit = $this->getMockBuilder(Unit::class)
            ->setMethods(['real'])
            ->getMock();

        $unit->expects($this->any())
            ->method('real')
            ->willReturn('mocked');

        /** @var Unit $unit */
        static::assertSame('mocked', $unit->underTest());
        static::assertNotSame('real', $unit->underTest());
    }
}