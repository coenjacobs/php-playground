<?php

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
