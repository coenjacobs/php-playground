<?php

// WeIrD StRiNg CaSe
// https://www.codewars.com/kata/52b757663a95b11b3d00062d

function toWeirdCase($string) {
  return implode( ' ', array_map( function( $word ) {
    foreach( str_split( $word ) as $charkey => $char ) {
      $word[ $charkey ] = ( $charkey % 2 === 0 ) ? strtoupper($char) : strtolower($char);
    }
    return $word;
  }, explode( ' ', $string ) ) );
}
