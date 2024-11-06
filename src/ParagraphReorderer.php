<?php

namespace Bhbsd;

class ParagraphReorderer
{
    public function reorder(string $inputParagraph): string
    {
        preg_match_all('/([^.?!]+[.?!]?)/', $inputParagraph, $matches);
        $sentences = $matches[0];

        usort($sentences, fn($a, $b)=> (strlen($a) < strlen($b)) ? -1 : 1);
        return array_reduce($sentences, function ($acc, $sen) {
            return $acc . $sen;
        },
            "");
    }
}
