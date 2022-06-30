<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ColorSwitchTest extends TestCase
{
    
    public function testTokenColorSwitch()
    {
        // CSS styles of the two possible tokens
        $redTokenStyle = 'bg-red-500 text-center mx-1 mt-1 w-24 h-24';
        $skyTokenStyle = 'bg-sky-500 text-center mx-1 mt-1 w-24 h-24';

        
        $firstTurn = file_get_contents('http://cuatroenlinea.ddev.site/jugar/1');
        // Check if game starts with a red token
        $this->assertTrue(substr_count($firstTurn, $redTokenStyle) === 1);

        $secondTurn = file_get_contents('http://cuatroenlinea.ddev.site/jugar/12');
        // Check if token color changes to blue on second turn
        $this->assertTrue(substr_count($secondTurn, $skyTokenStyle) === 1);

        $thirdTurn = file_get_contents('http://cuatroenlinea.ddev.site/jugar/123');
        // Check if it goes back to a red token on third turn
        $this->assertTrue(substr_count($thirdTurn, $redTokenStyle) === 2);
    }

    public function testCircleColorSwitch()
    {
        // Indicators of the two possible hover circles
        // There should be different CSS classes for these and the tokens so the indicators are much simpler
        $redCircleIndicator = 'hover:bg-red-500';
        $skyCircleIndicator = 'hover:bg-sky-500';

        // There is no way to check first turn yet

        $firstTurn = file_get_contents('http://cuatroenlinea.ddev.site/jugar/1');
        // Check if circles are blue for the second turn
        $this->assertTrue(substr_count($firstTurn, $skyCircleIndicator) === 7);

        $secondTurn = file_get_contents('http://cuatroenlinea.ddev.site/jugar/12');
        // Check if circles are red for the third turn
        $this->assertTrue(substr_count($secondTurn, $redCircleIndicator) === 7);

        $thirdTurn = file_get_contents('http://cuatroenlinea.ddev.site/jugar/123');
        // Check if circles go back to blue for the fourth turn
        $this->assertTrue(substr_count($thirdTurn, $skyCircleIndicator) === 7);

    }

}
