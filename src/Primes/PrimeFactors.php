<?php

namespace Smbkr\Katas\Primes;

class PrimeFactors
{
    public function generate(int $number): array
    {
        $primes = [];

        $candidate = 2;

        while ($number > 1)
        {
            while ($number % $candidate === 0)
            {
                $primes[] = $candidate;

                $number /= $candidate;
            }

            $candidate ++;
        }

        return $primes;
    }
}
