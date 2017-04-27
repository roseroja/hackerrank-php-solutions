<?php

/* Refactored solution (All tests passing at hackerrank.com)
https://www.hackerrank.com/challenges/drawing-book
*/

function solve($n, $p) {
  if ($n == null or $p == null) return 1;

  return floor(
    min(
      $p / 2,
      ($n-$p)/2
    )
  );
}
