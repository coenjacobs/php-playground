<?php

function spinWords(string $str): string {
  $words = explode(' ', $str);

  foreach( $words as $key => $word ) {
      $words[$key] = ( strlen($word) > 4 ) ? strrev($word) : $word;
  }

  return implode(' ', $words);
}
