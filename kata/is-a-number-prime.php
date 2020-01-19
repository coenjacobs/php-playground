<?php

// Is a number prime?
// https://www.codewars.com/kata/5262119038c0985a5b00029f

function is_prime(int $n): bool {
  if ( $n < 2 ) {
    return false;
  }
  
  if ( $n === 2 ) {
    return true;
  }
  
  if ( $n % 2 === 0 ) {
    return false;
  }
  
  $top = ceil(sqrt($n));
  for ($i = 3; $i <= $top; $i += 2) {
    if ($n % $i === 0) {
      return false;
    }
  }
  
  return true;
}