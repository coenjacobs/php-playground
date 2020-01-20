<?php

// Bit Counting
// https://www.codewars.com/kata/526571aae218b8ee490006f4

function countBits($n)
{
  $bits = str_split(decbin($n));

  $sum = 0;
  foreach( $bits as $bit) {
    $sum += intval($bit);
  }

  return $sum;
}
