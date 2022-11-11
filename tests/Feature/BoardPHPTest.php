<?php

namespace Tests\Feature;

class BoardPHPTest extends TestCase
{

public function testAddToken() {
  $board = new Board();
  $board->addToken(new Token("Red"), 1);
  $board->addToken(new Token("Blue"), 2);
  $board->addToken(new Token("Red"), 3);
  $this->expectException($board->addToken(new Token("Red"), 8));
  $this->expectException($board->addToken(new Token("Red"), 0));

  $contents = $board->boardContents();

  assertTrue($contents[1][1] == 'R');
  assertTrue($contents[2][1] == 'B');
  assertTrue($contents[3][1] == 'R');
  }
}