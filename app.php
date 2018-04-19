<?php

declare(strict_types=1);


function distributeSmoothies(int $smoothiesCount, int $hipsterCount): int
{
    if ($smoothiesCount > $hipsterCount) {
        return \intdiv($smoothiesCount, $hipsterCount);
    }

    return 0;
}

assert(0 === distributeSmoothies(20, 20));
assert(1 === distributeSmoothies(21, 20));
assert(2 === distributeSmoothies(49, 20));
assert(9 === distributeSmoothies(49, 5));