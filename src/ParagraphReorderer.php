<?php

namespace Bhbsd;

class ParagraphReorderer
{
    public function reorder(string $inputParagraph): string
    {
        $sentences = preg_split('/(?<=[.!?])\s+/', trim($inputParagraph), -1, PREG_SPLIT_NO_EMPTY);
        $sentences = array_reverse($sentences);
        return array_reduce($sentences, function ($acc, $sen) {
            return $acc . $sen;
        },
            "");
    }
}
