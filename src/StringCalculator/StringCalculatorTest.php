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

    /**
     * @test
     * @dataProvider arbitraryNumberProvider
     */
    public function it_sums_an_arbitrary_number_of_digits(string $digits, int $expected)
    {
        $stringCalculator = new StringCalculator;

        $result = $stringCalculator->add($digits);

        $this->assertEquals($expected, $result);
    }

    public function arbitraryNumberProvider(): array
    {
        return [
            ["0,1,2", 3],
            ["0,1,2,3", 6],
            ["1,1,1,1,1,1,1,1,1,1", 10],
            ["0,0,0,0,0", 0]
        ];
    }

    /**
     * @test
     * @dataProvider delimiterProvider
     */
    public function delimiter_can_be_comma_or_newline(string $digits, int $expected)
    {
        $stringCalculator = new StringCalculator;

        $result = $stringCalculator->add($digits);

        $this->assertEquals($expected, $result);
    }

    public function delimiterProvider(): array
    {
        return [
            ["1\n2,3", 6],
            ["1,2,3", 6],
            ["1\n2\n3", 6]
        ];
    }
}
