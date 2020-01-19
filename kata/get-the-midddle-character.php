<?php

// Get the Middle Character
// https://www.codewars.com/kata/56747fd5cb988479af000028

function getMiddle($text) {
  $length = strlen($text);
  if ($length % 2 === 0 ) {
    $middle = floor($length / 2);
    return $text[ $middle - 1 ] . $text[ $middle ];
  }
  
  return $text[ $length / 2 ];
}