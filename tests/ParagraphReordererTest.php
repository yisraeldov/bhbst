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

    public function testSentencesReverseOrdered(): void
    {
        $input = "c c c.b b.a.";
        $this->assertEquals("a.b b.c c c.", $this->sut->reorder($input));
    }

    public function testSentencesOrderedOrdered(): void
    {
        $input = "a.X b.c c c.";
        $this->assertEquals("a.X b.c c c.", $this->sut->reorder($input));
    }

    public function testWithAlternatePunctuation(): void
    {
        $input = "a!X b?c c c!";
        $this->assertEquals("a!X b?c c c!", $this->sut->reorder($input));
    }

    public function testLongSentence(): void
    {
        $input = "The sun shines brightly. It brings warmth and joy to everyone. Today is a beautiful day. People gather in parks to enjoy the weather.";
        $expected = "The sun shines brightly. Today is a beautiful day. It brings warmth and joy to everyone. People gather in parks to enjoy the weather.";
        $this->assertEquals($expected, $this->sut->reorder($input));
    }
}
