<?php

namespace Bhbsd\Tests;

use Bhbsd\ParagraphReorderer;
use PHPUnit\Framework\TestCase;

class ParagraphReordererTest extends TestCase
{
    private ParagraphReorderer $sut;

    public function setUp(): void
    {
        $this->sut = new ParagraphReorderer();
    }

    public function testEmptyParagraphReturnsEmpty(): void
    {
        $this->assertEquals("", $this->sut->reorder(""));
        $this->assertEquals("a", $this->sut->reorder("a"));
    }

    public function test2SentencesOrdered(): void
    {
        $input = "b b. a.";
        $this->assertEquals("a.b b.", $this->sut->reorder($input));
    }
}
