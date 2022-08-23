<?php

// Tablero del juego

class GameBoard {
  protected $empty = True;
  protected $contents = [];

  public function __construct() {
  }

  public function isEmpty() {
    return $empty;
  }

  public function addToken(GameToken $token, $column) {
    array_push($this->contents[$column], $token);
  }
}