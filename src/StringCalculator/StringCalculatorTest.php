<?php

namespace Smbkr\Katas\StringCalculator;

use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /** @test */
    public function it_returns_0_for_an_empty_string()
    {
        $stringCalculator = new StringCalculator;

        $result = $stringCalculator->add("");

        $this->assertEquals(0, $result);
    }

    /**
     * @test
     * @dataProvider singleDigitProvider
     */
    public function it_returns_the_number_for_one_digit(int $digit)
    {
        $stringCalculator = new StringCalculator;

        $result = $stringCalculator->add(
            (string) $digit
        );

        $this->assertEquals($digit, $result);
    }

    /**
     * Provider for single digit test.
     * @return array
     */
    public function singleDigitProvider(): array
    {
        return [
            [1],
            [2],
            [3],
            [4],
            [5],
            [6],
            [7],
            [8],
            [9],
        ];
    }

    /**
     * @test
     * @dataProvider twoDigitsProvider
     */
    public function it_returns_sum_of_two_digits(string $digits, int $expected)
    {
        $stringCalculator = new StringCalculator;

        $result = $stringCalculator->add($digits);

        $this->assertEquals($expected, $result);
    }

    /**
     * Provider for two digits test.
     * @return array
     */
    public function twoDigitsProvider(): array
    {
        return [
            ["0,0", 0],
            ["1,0", 1],
            ["1,1", 2],
            ["1,2", 3],
        ];
    }
}
