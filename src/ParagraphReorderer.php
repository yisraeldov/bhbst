<?php

namespace Bhbsd;

class ParagraphReorderer
{
    /**
     * @param array<string> $sentences
     */
    private function sortByLength(array &$sentences): void
    {
        usort($sentences, fn($a, $b)=> (strlen($a) < strlen($b)) ? -1 : 1);
    }

    public function reorder(string $inputParagraph): string
    {
        preg_match_all('/([^.?!]+[.?!]?)/', $inputParagraph, $matches);
        $sentences = $matches[0];

        $this->sortByLength($sentences);
        return array_reduce($sentences, function ($acc, $sen) {
            return $acc . $sen;
        },
            "");
    }
}
