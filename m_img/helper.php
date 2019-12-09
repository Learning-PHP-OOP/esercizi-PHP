<?php

  function getRandomElem($arr) {
    $indRnd = rand(0, count($arr) - 1);
    return $arr[$indRnd];
  }
  function getRandomActiveElem($arr) {
    do {
      $ad = getRandomElem($arr);
    } while ($ad["is_active"] !== true);
    return $ad;
  }
  
 ?>
