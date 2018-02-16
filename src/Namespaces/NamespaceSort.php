<?php

namespace Smbkr\Katas\Namespaces;

class NamespaceSort
{
    public function sort(array $input): array
    {
        sort($input);
        usort($input, function ($a, $b) {
            $aParts = explode('\\', $a);
            $bParts = explode('\\', $b);

            return count($aParts) - count($bParts);
        });

        return $input;
    }
}
