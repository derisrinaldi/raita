<?php

namespace Rinaldi\Raita;

class Raita
{
	public static function search($pattern, $shiftTable, $text)
	{
		$patternLength = strlen($pattern);
		$textLength = strlen($text);

		// proses pencarian
		$index = 0;
		while ($index <= $textLength - $patternLength) {
			$endCaracter = $text[$index + $patternLength - 1]; // Karakter Akhir

			if ($pattern[-1] == $endCaracter && $pattern[(int)floor($patternLength / 2)] == $text[$index + (int)floor($patternLength / 2)] && $pattern[0] == $text[$index]) {
				return $index + $patternLength - 1; // pola ditemukan
			}

			if ($shiftTable[ord($endCaracter)] != 0) {
				$index += $shiftTable[ord($endCaracter)]; //shifting
			} else {
				$index += $patternLength;
			}
		}

		return -1; // pola tidak ditemukan
	}
}

