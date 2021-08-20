<?php
declare(strict_types=1);

namespace Test\unit;

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    /**
     * @var \App\Hello|mixed|\PHPUnit\Framework\MockObject\MockObject
     */
    private mixed $helloClass;

    public function setUp(): void
    {
        $this->helloClass = $this->getMockBuilder(\App\Hello::class)
                                 ->addMethods([])
                                 ->getMock();
    }

    /** @test */
    public function
    hello()
    {
        $this->assertEquals('Hello World', $this->helloClass->run());
    }
}
