<?php

// Tablero del juego

class GameBoard {
  protected $empty = True;
  protected $contents = [];

  function __construct() {
  }

  function isEmpty() {
    return $empty;
  }

  function addToken(GameToken $token, $column) {
    array_push($this->contents[$column], $token);
  }
}