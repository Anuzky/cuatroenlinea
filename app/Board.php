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

  public function boardContents() {
    return $this->contents;
  }

  public function boardToken(int $col, int $row) {
    return $this->contents[$col][$row];
  }
}