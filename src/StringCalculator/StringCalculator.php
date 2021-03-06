<?php

namespace Smbkr\Katas\StringCalculator;

class StringCalculator
{
    public function add(string $numbers): int
    {
        return array_reduce(preg_split("/\n|,/", $numbers),
            function ($accumulator, $value) {
                return $accumulator += (int) $value;
            }
        );
    }
}
