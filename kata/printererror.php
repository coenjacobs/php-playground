<?php

// Printer Errors
// https://www.codewars.com/kata/56541980fa08ab47a0000040

function printerError($s) {
    $allowed = str_split('abcdefghijklm');
    $provided = str_split($s);
    $errorCount = 0;

    foreach( $provided as $char ) {
      if ( ! in_array( $char, $allowed ) ) {
        $errorCount++;
      }
    }

    return $errorCount . "/" . count($provided);
}
