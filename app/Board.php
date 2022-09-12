<?php
namespace App;

//use App\Token;
// Tablero del juego

class Board
{
  protected $contents =  array(
    1 => array('', '', '', '', '', '', 0), 
    2 => array('', '', '', '', '', '', 0), 
    3 => array('', '', '', '', '', '', 0), 
    4 => array('', '', '', '', '', '', 0), 
    5 => array('', '', '', '', '', '', 0), 
    6 => array('', '', '', '', '', '', 0),
    7 => array('', '', '', '', '', '', 0)
  );

  public function __construct() {
  }

  public function addToken(Token $token, int $col) {
    $index = $this->contents[$col][6];
    $this->contents[$col][$index] = $token;
    $this->contents[$col][6]++;
  }

  public function printBoard() {
    for ($row = 5; $row >= 0; $row--) {
      for ($col = 1; $col <=7; $col++) {
        if ($this->contents[$col][$row])
          $this->contents[$col][$row]->printToken();
        else
          print('0 ');
      }
      print("\n");
    }
  }

  public function boardContents() {
    return $this->contents;
  }
}