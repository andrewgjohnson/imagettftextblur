<?php

namespace AndrewGJohnson\AgjGd\Tests;

use PHPUnit\Framework\TestCase;

class ImagettftextblurTest extends TestCase
{
    public function testFunctionExists(): void
    {
        $this->assertTrue(function_exists('imagettftextblur'));
    }
}
