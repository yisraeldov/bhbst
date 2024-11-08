<?php

namespace Bhbsd;

class ParagraphReordererCustomAlapha
{
    private $customOrder = [
        'G' => 'C',
        'H' => 'E',
        'V' => 'F',
        'Z' => 'G',
        'T' => 'H',
        'Y' => 'I',
        'L' => 'J',
        'M' => 'K',
        'N' => 'L',
        'S' => 'M',
        'P' => 'N',
        'Q' => 'O',
        'R' => 'P',
        'I' => 'Q',
        'C' => 'R',
        'K' => 'S',
        'E' => 'T',
        'F' => 'U',
        'J' => 'V',
        'O' => 'W',
        'U' => 'X',
        'W' => 'Y',
        'X' => 'Z',
      ];

    public function reorder(string $string): string
    {
        $sentences = $this->split($string);
        $sorted = $this->sort($sentences);
        return implode(' ', $sorted);
    }

    /**
     * Splits a string into words, ignoring punctioation
     *
     * @return string[]
     */
    private function split(string $paragraph): array
    {
        return preg_split('/[ .?!,]+/', $paragraph, -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * @param array<string> $words
     * @return array<string>
     */
    private function sort(array $words): array
    {
        usort($words, [$this, 'compare']);
        return $words;
    }

    public function compare(string $s1, string $s2): int
    {
        return strcmp(
            strtr(strtoupper($s1), $this->customOrder),
            strtr(strtoupper($s2), $this->customOrder)
        );
    }
}
