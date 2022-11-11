<?php
namespace App;
// Fichas del juego

class Token {
  protected $color;

  public function __construct($color){
    if ($color != "Blue" and $color != "Red") {
      die("Color not valid");
    }
    $this->color = $color;
  }

  public function color() {
    return $this->color;
  }
}