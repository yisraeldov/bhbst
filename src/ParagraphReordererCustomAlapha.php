<?php

namespace Bhbsd;

class ParagraphReordererCustomAlapha
{
    public function reorder(string $string): string
    {
        $sentences = $this->split($string);

        sort($sentences);
        return join(' ', $sentences);
    }

    /**
     * @return string[]
     */
    private function split(string $paragraph): array
    {
        return explode(' ', $paragraph);
    }
}
