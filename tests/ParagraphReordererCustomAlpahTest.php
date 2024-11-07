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
}
