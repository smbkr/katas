<?php

namespace Primes;

class PrimeFactors
{
    public function generate(int $number): array
    {
        $primes = [];

        $candidate = 2;

        while ($candidate < $number)
        {
            while ($number % $candidate === 0)
            {
                $primes[] = $candidate;

                $number /= $candidate;
            }

            $candidate ++;
        }

        if ($number > 1)
        {
            $primes[] = $number;
        }

        return $primes;
    }
}
