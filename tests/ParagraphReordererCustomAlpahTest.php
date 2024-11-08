<?php

namespace Bhbsd\Tests;

use Bhbsd\ParagraphReordererCustomAlapha;
use PHPUnit\Framework\TestCase;

class ParagraphReordererCustomAlpahTest extends TestCase
{
    private ParagraphReordererCustomAlapha $sut;

    public function setUp(): void
    {
        $this->sut = new ParagraphReordererCustomAlapha();
    }

    public function testEmpty(): void
    {
        $this->assertEquals("", $this->sut->reorder(""));
    }

    public function testAbIsAb(): void
    {
        $this->assertEquals("a b", $this->sut->reorder("a b"));
        $this->assertEquals("a b", $this->sut->reorder("b a"));
    }

    public function testHeb3(): void
    {
        $this->assertEquals("a b g d", $this->sut->reorder("d g b a"));
        $expected = "a a a adding across ball barking brightly brown big grassy day distance dog happily high This The the the The the to yellow Nearby shining scene sun playing perfect It cat chased curious excitedly from field for jumped outside watched was was warmth";
        $input = "The big brown dog happily chased the yellow ball across the grassy field. It jumped high, barking excitedly. Nearby, a curious cat watched from a distance. The sun was shining brightly, adding warmth to the scene. This was a perfect day for playing outside.";
        $this->assertEquals($expected, $this->sut->reorder($input));
    }
}
