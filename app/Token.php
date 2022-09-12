<?php
namespace App;
// Fichas del juego

class Token {
  protected $color;

  public function __construct($color){
    $this->color = $color;
  }

  public function printToken(){
    if ($this->color == "Red")
      print('R ');
    else
      print('B ');
  }

}