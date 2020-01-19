<?php

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
