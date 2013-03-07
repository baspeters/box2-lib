<?php

namespace Herrera\Box\Tests\Exception;

use Herrera\Box\Exception\Exception;
use Herrera\PHPUnit\TestCase;

class ExceptionTest extends TestCase
{
    public function testCreate()
    {
        $exception = Exception::create('My %s.', 'message');

        $this->assertEquals('My message.', $exception->getMessage());
    }

    public function testLastError()
    {
        @$test;

        $exception = Exception::lastError();

        $this->assertEquals('Undefined variable: test', $exception->getMessage());
    }
}