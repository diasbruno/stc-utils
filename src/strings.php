<?php

function to_slug($string) {
  // lower case
  $string = strtolower($string);
  // make alphanumeric (removes all other characters)
  $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
  // clean up multiple dashes or whitespaces
  $string = preg_replace("/[\s-]+/", " ", $string);
  // convert whitespaces and underscore to dash
  $string = preg_replace("/[\s_]/", "-", $string);
  return $string;
}
