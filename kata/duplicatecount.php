<?php

// Counting Duplicates
// https://www.codewars.com/kata/54bf1c2cd5b56cc47f0007a1

function duplicateCount($text) {
  $contains = [];
  $duplicates = [];

  foreach( str_split($text) as $char ) {
    $char = strtolower($char);

    if ( in_array( $char, $duplicates ) ) {
      continue;
    }

    if ( in_array( $char, $contains ) ) {
      $duplicates[] = $char;
      continue;
    }

    $contains[] = $char;
  }

  return count( $duplicates );
}
