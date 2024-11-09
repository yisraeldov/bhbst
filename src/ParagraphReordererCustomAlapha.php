<?php

namespace Bhbsd;

class ParagraphReordererCustomAlapha implements ParagraphReorderer
{
    /**
     * @property
     * A map ASCII chars to equivalent Hebrew orderd letters
     */
    private $replacePairs = [
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
        return preg_split('/\W+/', $paragraph, -1, PREG_SPLIT_NO_EMPTY);
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
            $this->transToHebOrderedChars($s1),
            $this->transToHebOrderedChars($s2)
        );
    }

    private function transToHebOrderedChars(string $s): string
    {
        return strtr(strtoupper($s), $this->replacePairs);
    }
}
