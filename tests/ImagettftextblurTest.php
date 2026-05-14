<?php

/**
 * Copyright (c) 2013-2026 Andrew G. Johnson <andrew@andrewgjohnson.com>
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
 * Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace AndrewGJohnson\AgjGd\Tests;

use PHPUnit\Framework\TestCase;

class ImagettftextblurTest extends TestCase
{
    private const BLUR_INTENSITY = 1;
    private const FONT_ANGLE     = 0;
    private const FONT_PATH      = __DIR__ . '/NotoSans-Regular.ttf';
    private const FONT_SIZE      = 12;
    private const FONT_X         = 10;
    private const FONT_Y         = 50;
    private const IMAGE_WIDTH    = 200;
    private const IMAGE_HEIGHT   = 100;

    public function testFunctionExists(): void
    {
        $this->assertTrue(function_exists('imagettftextblur'));
    }

    public function testFunctionReturnsArrayWithBlur(): void
    {
        $image = imagecreatetruecolor(self::IMAGE_WIDTH, self::IMAGE_HEIGHT);

        // Test the PHP 8+ version
        $result = imagettftextblur(
            $image,
            self::FONT_SIZE,
            self::FONT_ANGLE,
            self::FONT_X,
            self::FONT_Y,
            imagecolorallocate($image, 0, 0, 0),
            self::FONT_PATH,
            'Hello world!',
            [],
            self::BLUR_INTENSITY
        );

        $this->assertIsArray($result);
        $this->assertCount(8, $result);

        // Test the PHP 5/7 version
        $result = imagettftextblur(
            $image,
            self::FONT_SIZE,
            self::FONT_ANGLE,
            self::FONT_X,
            self::FONT_Y,
            imagecolorallocate($image, 0, 0, 0),
            self::FONT_PATH,
            'Hello world!',
            self::BLUR_INTENSITY
        );

        $this->assertIsArray($result);
        $this->assertCount(8, $result);
    }

    public function testFunctionReturnsArrayWithoutBlur(): void
    {
        $image = imagecreatetruecolor(self::IMAGE_WIDTH, self::IMAGE_HEIGHT);

        // Test the PHP 8+ version
        $result = imagettftextblur(
            $image,
            self::FONT_SIZE,
            self::FONT_ANGLE,
            self::FONT_X,
            self::FONT_Y,
            imagecolorallocate($image, 0, 0, 0),
            self::FONT_PATH,
            'Hello world!',
            []
        );

        $this->assertIsArray($result);
        $this->assertCount(8, $result);

        // Test the PHP 5/7 version
        $result = imagettftextblur(
            $image,
            self::FONT_SIZE,
            self::FONT_ANGLE,
            self::FONT_X,
            self::FONT_Y,
            imagecolorallocate($image, 0, 0, 0),
            self::FONT_PATH,
            'Hello world!'
        );

        $this->assertIsArray($result);
        $this->assertCount(8, $result);
    }

    public function testBoundingBoxWithinImageBounds(): void
    {
        $image = imagecreatetruecolor(self::IMAGE_WIDTH, self::IMAGE_HEIGHT);

        $result = imagettftextblur(
            $image,
            self::FONT_SIZE,
            self::FONT_ANGLE,
            self::FONT_X,
            self::FONT_Y,
            imagecolorallocate($image, 0, 0, 0),
            self::FONT_PATH,
            'Hello world!',
            1
        );

        if (is_array($result)) {
            foreach ([0, 2, 4, 6] as $i) {
                $this->assertGreaterThanOrEqual(0, $result[$i]);
                $this->assertLessThanOrEqual(self::IMAGE_WIDTH, $result[$i]);
            }
            foreach ([1, 3, 5, 7] as $i) {
                $this->assertGreaterThanOrEqual(0, $result[$i]);
                $this->assertLessThanOrEqual(self::IMAGE_HEIGHT, $result[$i]);
            }
        }
    }

    public function testFullyTransparentColorReturnsFalse(): void
    {
        $image = imagecreatetruecolor(self::IMAGE_WIDTH, self::IMAGE_HEIGHT);

        $result = imagettftextblur(
            $image,
            self::FONT_SIZE,
            self::FONT_ANGLE,
            self::FONT_X,
            self::FONT_Y,
            imagecolorallocatealpha($image, 0, 0, 0, 127), // 127 = completely transparent
            self::FONT_PATH,
            'Hello world!',
            self::BLUR_INTENSITY
        );

        $this->assertFalse($result);
    }

    public function testImageIsModifiedByUse(): void
    {
        $image = imagecreatetruecolor(self::IMAGE_WIDTH, self::IMAGE_HEIGHT);

        $backgroundColor = imagecolorallocate($image, 255, 255, 255); // RGB(255,255,255) = white
        imagefill($image, 0, 0, $backgroundColor);

        imagettftextblur(
            $image,
            self::FONT_SIZE,
            self::FONT_ANGLE,
            self::FONT_X,
            self::FONT_Y,
            imagecolorallocate($image, 0, 0, 0),
            self::FONT_PATH,
            'Hello world!',
            self::BLUR_INTENSITY
        );

        // At least one pixel somewhere in the image must differ from the background
        $modified = false;
        for ($x = 0; $x < self::IMAGE_WIDTH && !$modified; $x++) {
            for ($y = 0; $y < self::IMAGE_HEIGHT && !$modified; $y++) {
                if (imagecolorat($image, $x, $y) !== $backgroundColor) {
                    $modified = true;
                }
            }
        }

        $this->assertTrue($modified);
    }
}
