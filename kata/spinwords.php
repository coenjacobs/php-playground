<?php

// Stop gninnipS My sdroW!
// https://www.codewars.com/kata/5264d2b162488dc400000001

function spinWords(string $str): string {
  $words = explode(' ', $str);

  foreach( $words as $key => $word ) {
      $words[$key] = ( strlen($word) > 4 ) ? strrev($word) : $word;
  }

  return implode(' ', $words);
}
