<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BoardTest extends TestCase
{
    public function testGridOn()
    {
        $view = file_get_contents('http://cuatroenlinea.ddev.site/jugar/1');
        // Test if the grid which holds the spaces is on the screen
        $this->assertTrue(substr_count($view, 'grid grid-gap-4 grid-cols-7 grid-rows-6') === 1);
    }


    public function testAllSpacesOnBoard()
    {
        $view = file_get_contents('http://cuatroenlinea.ddev.site/jugar/1');
        $spaceIndicator = 'bg-gray-200 text-center mx-1 mt-1 w-24 h-24';

        // Test if all spaces are on screen (plus the red token from the start)
        $this->assertTrue(substr_count($view,$spaceIndicator) + 1 === 42);
    }
}
