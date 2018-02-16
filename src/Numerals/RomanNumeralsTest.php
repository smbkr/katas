<?php

namespace Smbkr\Katas\Numerals;

use PHPUnit\Framework\TestCase;
use \Exception;

class RomanNumeralsTest extends TestCase
{
    public function numeralsProvider(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [5, 'V'],
            [4, 'IV'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [11, 'XI'],
            [12, 'XII'],
            [14, 'XIV'],
            [15, 'XV'],
            [16, 'XVI'],
            [19, 'XIX'],
            [20, 'XX'],
            [21, 'XXI'],
            [25, 'XXV'],
            [26, 'XXVI'],
            [30, 'XXX'],
            [31, 'XXXI'],
            [35, 'XXXV'],
            [36, 'XXXVI'],
            [41, 'XLI'],
            [44, 'XLIV'],
            [50, 'L'],
            [60, 'LX'],
            [75, 'LXXV'],
            [90, 'XC'],
            [100, 'C'],
            [127, 'CXXVII'],
            [144, 'CXLIV'],
            [236, 'CCXXXVI'],
            [400, 'CD'],
            [444, 'CDXLIV'],
            [500, 'D'],
            [900, 'CM'],
            [949, 'CMXLIX'],
            [1000, 'M'],
            [1949, 'MCMXLIX'],
            [1999, 'MCMXCIX'],
            [4990, 'MMMMCMXC']
        ];
    }

    /**
     * @dataProvider numeralsProvider
     */
    public function testRomanNumerals(int $num, string $expected): void
    {
        $romanNumerals = new RomanNumerals;

        $this->assertEquals($expected, $romanNumerals->convert($num));
    }

    public function testExceptionThrownWhenInputIsZero(): void
    {
        $romanNumerals = new RomanNumerals;

        $this->expectException(Exception::class);

        $romanNumerals->convert(0);
    }

    public function testExceptionThrownWhenInputIsLessThan1(): void
    {
        $romanNumerals = new RomanNumerals;

        $this->expectException(Exception::class);

        $romanNumerals->convert(-100);
    }
}
