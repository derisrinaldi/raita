<?php

namespace Rinaldi\Raita;

class ShiftTable {

    public static function shifting($pattern)
    {
        # code...
        $patternLength = strlen($pattern);
        
        // Buat tabel pergeseran
        $shiftTable = array();
        for ($index = 0; $index < 256; $index++) {
            $shiftTable[$index] = $patternLength;
        }
        for ($index = 0; $index < $patternLength - 1; $index++) {
            $shiftTable[ord($pattern[$index])] = $patternLength - $index - 1;
        }

        return $shiftTable;
    }
}
