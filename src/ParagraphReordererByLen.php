<?php

namespace Bhbsd;

class ParagraphReordererByLen
{
    /**
     * accepts a paragraph and reorders all sentences according to
     * their lengths (characters) in ascending order.
     */
    public function reorder(string $inputParagraph): string
    {
        $sentences = $this->split($inputParagraph);
        return implode('', $this->sort($sentences));
    }

    /**
     * @return array<string>
     */
    private function split(string $inputParagraph): array
    {
        preg_match_all('/([^.?!]+[.?!]?)/', $inputParagraph, $matches);
        $sentences = $matches[0];
        return $sentences;
    }

    /**
     * @param string[] $sentences
     * @return string[]
     */
    public function sort(array $sentences): array
    {
        return $this->sortByLength($sentences);
    }

    /**
     * @param array<string> $sentences
     * @return array<string>
     */
    private function sortByLength(array $sentences): array
    {
        usort($sentences, fn($a, $b)=> (strlen($a) < strlen($b)) ? -1 : 1);
        return $sentences;
    }
}
