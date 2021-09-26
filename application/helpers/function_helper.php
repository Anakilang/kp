<?php

function skorNilai($skor, $nilai)
{
    if ($nilai == 'A') $skor >= 90;
    else if ($nilai == 'B') $skor >= 80;
    else if ($nilai == 'C') $skor >= 70;
    else if ($nilai == 'D') $skor >= 60;
    else if ($nilai == 'E') $skor >= 10;
    return $skor;
}
