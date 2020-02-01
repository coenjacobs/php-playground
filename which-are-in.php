<?php

// Which are in?
// https://www.codewars.com/kata/550554fd08b86f84fe000a58

function inArray($array1, $array2) {
    $result = array_filter( $array1, function( $element ) use ( $array2 ) {
      foreach( $array2 as $value ) {
        if (strpos( $value, $element ) !== false ) {
          return $element;
        }
      }
    } );

    sort($result);
    return $result;
}
