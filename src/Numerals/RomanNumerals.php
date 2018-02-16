<?php

namespace Smbkr\Katas\Numerals;

use \Exception;

class RomanNumerals
{
    public $mapping = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    public function convert(int $num): string
    {
        if ($num < 1) {
            throw new Exception('Must be greater than zero.');
        }

        $solution = '';

        foreach ($this->mapping as $arabic => $roman) {
            while ($num >= $arabic) {
                $solution .= $roman;
                $num -= $arabic;
            }
        }

        return $solution;
    }
}
