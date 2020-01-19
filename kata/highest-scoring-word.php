<?php

// Highest Scoring Word
// https://www.codewars.com/kata/57eb8fcdf670e99d9b000272

function high($x) {
  $alphabet = range('a', 'z');
  $high_word = '';
  $high_score = 0;
  
  foreach(explode(' ', $x) as $word) {
    $score = 0;
    foreach(str_split($word) as $char) {
      $score += array_search($char, $alphabet) + 1;
    }
    
    if ( $score > $high_score ) {
      $high_score = $score;
      $high_word = $word;
    }
  }
  
  return $high_word;
}