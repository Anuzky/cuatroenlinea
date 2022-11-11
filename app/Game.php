<?php
namespace App;

class Game
{
  protected $current_color = "Red";
  protected $current_player = "1";

  public function nextTurn() {
    if ($this->current_color == "Red") {
      $this->current_color = "Blue";
      $this->current_player = "2";
    }
    else {
      $this->current_color = "Red";
      $this->current_player = "1";
    }
  }

  public function play() {
    $board = new Board();
    $this->current_color = "Red";
    $this->current_player = "1";
    $game_status = new GameStatus();
    $printer = new BoardPrinter();

    while ($game_status->gameEnded($board) == false) {
      print("Jugador {$this->current_player}, tu turno. Ingresa una columna: ");
      fscanf(STDIN, "%d", $pos);
      $board->addToken(new Token($this->current_color), $pos);

      $printer->printBoard($board);

      $this->nextTurn();
    }
    
    $this->nextTurn();
    print("Felicitaciones, ha ganado el jugador {$this->current_player}!");
  }
}
