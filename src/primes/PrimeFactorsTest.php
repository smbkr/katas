<?php

namespace Smbkr\Katas\Primes;

use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    public function primesProvider(): array
    {
        return [
            [
                [], 1
            ],
            [
                [2], 2
            ],
            [
                [3], 3
            ],
            [
                [2, 2], 4
            ],
            [
                [5], 5
            ],
            [
                [2, 3], 6
            ],
            [
                [7], 7
            ],
            [
                [2, 2, 2], 8
            ],
            [
                [3, 3], 9
            ],
            [
                [2, 5], 10
            ],
            [
                [11], 11
            ],
            [
                [2, 2, 3], 12
            ],
            [
                [13], 13
            ],
            [
                [2, 7], 14
            ],
            [
                [3, 5], 15
            ],
            [
                [2, 2, 2, 2], 16
            ],
            [
                [17], 17
            ],
            [
                [2, 3, 3], 18
            ],
            [
                [19], 19
            ],
            [
                [2, 2, 5], 20
            ]
        ];
    }

    /**
     * @dataProvider primesProvider
     * @test
     */
    public function test_prime_factors(array $expected, int $input): void
    {
        $primeFactors = new PrimeFactors;

        $this->assertEquals($expected, $primeFactors->generate($input));
    }
}
