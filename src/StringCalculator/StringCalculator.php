<?php

namespace Smbkr\Katas\StringCalculator;

class StringCalculator
{
    public function add(string $numbers): int
    {
        if (empty($numbers)) {
            return 0;
        }

        $numbers = explode(",", $numbers);

        return array_reduce($numbers, function ($accumulator, $value) {
            return $accumulator += $value;
        });
    }
}
