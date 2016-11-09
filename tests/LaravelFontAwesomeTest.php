<?php

use PendoNL\LaravelFontAwesome\LaravelFontAwesome;

class LaravelFontAwesomeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Check if it can generate a simple icon
     */
    public function it_generates_a_simple_icon()
    {
        $fa = new LaravelFontAwesome();

        $expected = '<i class="fa fa-font-awesome"></i>';
        $generated = $fa->icon('font-awesome');

        $this->assertEquals($expected, $generated);
    }

    /**
     * Check if it can generate an icon with options
     */
    public function it_generates_an_icon_with_options()
    {
        $fa = new LaravelFontAwesome();

        $expected = '<i class="fa fa-font-awesome tiny" data-extra="something else"></i>';
        $generated = $fa->icon('font-awesome', ['class' => 'tiny', 'data-extra' => 'something else']);

        $this->assertEquals($expected, $generated);
    }
}