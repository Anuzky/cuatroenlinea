<?php
namespace App;


class BoardPrinter
{
  public function printToken(Token $token){
    if ($token->color() == "Red")
      print('R ');
    else
      print('B ');
  }

  public function printBoard(Board $board) {
    for ($row = 5; $row >= 0; $row--) {
      for ($col = 1; $col <=7; $col++) {
        if ($board->boardToken($col, $row)) {
          $token = $board->boardToken($col, $row);
          $this->printToken($token);
        }
        else
          print('0 ');
      }
      print("\n");
    }
  }
}