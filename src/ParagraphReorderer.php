<?php

namespace Bhbsd;

class ParagraphReorderer
{
    public function reorder(string $inputParagraph): string
    {
        $sentences = $this->splitSentences($inputParagraph);
        $this->sortByLength($sentences);
        return array_reduce($sentences, function ($acc, $sen) {
            return $acc . $sen;
        },
            "");
    }

    private function splitSentences(string $inputParagraph): array
    {
        preg_match_all('/([^.?!]+[.?!]?)/', $inputParagraph, $matches);
        $sentences = $matches[0];
        return $sentences;
    }


    /**
     * @param array<string> $sentences
     */
    private function sortByLength(array &$sentences): void
    {
        usort($sentences, fn($a, $b)=> (strlen($a) < strlen($b)) ? -1 : 1);
    }
}
