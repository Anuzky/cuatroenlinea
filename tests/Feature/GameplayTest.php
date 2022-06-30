<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameplayTest extends TestCase
{
  public function testAllButtonsAvailable()
  {
    $board = file_get_contents('http://cuatroenlinea.ddev.site/jugar/1');
    $buttons = 'a href="/jugar/1';

    $this->assertTrue(substr_count($board, $buttons) === 7);
    $this->assertTrue(substr_count($board, $buttons . 1) === 1);
    $this->assertTrue(substr_count($board, $buttons . 2) === 1);
    $this->assertTrue(substr_count($board, $buttons . 3) === 1);
    $this->assertTrue(substr_count($board, $buttons . 4) === 1);
    $this->assertTrue(substr_count($board, $buttons . 5) === 1);
    $this->assertTrue(substr_count($board, $buttons . 6) === 1);
    $this->assertTrue(substr_count($board, $buttons . 7) === 1);
  }

  public function testButtonsAddedTokens()
  {
    $board = file_get_contents('http://cuatroenlinea.ddev.site/jugar/12345671');
    // There should be different CSS classes for the tokens so the indicators are much simpler
    $redTokenIndicator = 'class="bg-red-500';
    $skyTokenIndicator = 'class="bg-sky-500';

    $tokenCount = substr_count($board, $redTokenIndicator) + substr_count($board, $skyTokenIndicator);

    // Check if there's the same amount of tokens as turns  played
    $this->assertTrue($tokenCount === 8);
  }
}