<?php

use PendoNL\LaravelFontAwesome\LaravelFontAwesome as LaravelFontAwesome;

class LaravelFontAwesomeTest extends \PHPUnit\Framework\TestCase
{
    public function test_it_generates_a_simple_icon()
    {
        $fa = new LaravelFontAwesome();

        $expected = '<i class="fa fa-font-awesome"></i>';
        $generated = $fa->icon('font-awesome');

        $this->assertEquals($expected, $generated);
    }

    public function test_it_generates_an_icon_with_options()
    {
        $fa = new LaravelFontAwesome();

        $expected = '<i class="fa fa-font-awesome tiny" data-extra="something else"></i>';
        $generated = $fa->icon('font-awesome', ['class' => 'tiny', 'data-extra' => 'something else']);

        $this->assertEquals($expected, $generated);
    }
}
