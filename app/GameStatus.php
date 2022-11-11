<?php
namespace App;

class GameStatus
{
  public function gameEnded(Board $board) {
    $contents = $board->boardContents();
    
    return $this->hasVerticalLine($contents)
    || $this->hasHorizontalLine($contents)
    || $this->hasDescDiagonalLine($contents)
    || $this->hasAscDiagonalLine($contents);
  }

  protected function hasVerticalLine($contents) {
    for ($col = 1; $col <=7; $col++) {
        $v_ady = 0;
        for ($row = 5; $row > 0; $row--) {
          if ($contents[$col][$row] != '' && $contents[$col][$row] == $contents[$col][$row-1])
            $v_ady++;
          else
            $v_ady = 0;

          if ($v_ady == 3)
            return true;
      }
    }
  }

  protected function hasHorizontalLine($contents) {
    for ($row = 5; $row >= 0; $row--) {
      $h_ady = 0;
      for ($col = 1; $col < 7; $col++) {
        if ($contents[$col][$row] != '' && $contents[$col][$row] == $contents[$col+1][$row])
            $h_ady++;
        else
          $h_ady = 0;

        if ($h_ady == 3)
          return true;
      }
    }
  }

  protected function hasDescDiagonalLine($contents) {
    for ($row = 5; $row >= 3; $row--) {
      for ($col = 1; $col <= 4; $col++) {
        if ($contents[$col][$row] != '')
          if ($contents[$col][$row] == $contents[$col+1][$row-1]
            && $contents[$col+1][$row-1] == $contents[$col+2][$row-2]
            && $contents[$col+2][$row-2] == $contents[$col+3][$row-3])
            return true;
      }
    }
  }

  protected function hasAscDiagonalLine($contents) {
    for ($row = 5; $row >= 3; $row--) {
      for ($col = 7; $col >= 4; $col--) {
        if ($contents[$col][$row] != '')
          if ($contents[$col][$row] == $contents[$col-1][$row-1]
            && $contents[$col-1][$row-1] == $contents[$col-2][$row-2]
            && $contents[$col-2][$row-2] == $contents[$col-3][$row-3])
            return true;
      }
    }
  }
}