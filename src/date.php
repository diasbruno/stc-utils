<?php

/**
 * Find a date from a filename string.
 * ex. '2010-01-01-rest_of_the_file.ext' results in ["2010","01","01"].
 * @param $filename string | The filename string.
 * @return array
 */
function date_from_filename($filename = '')
{
  $pattern = '/(\d{4}-\d{2}-\d{2}).+$/';

  if (preg_match($pattern, $filename, $match)) {
    return explode('-', $match[1]);
  }

  return '';
}

/**
 * Find a date from a filename string and return as YYYYMMDD.
 * ex. '2010-01-01-rest_of_the_file.ext' results in "20100101".
 * @param $filename string | The filename string.
 * @return string
 */
function format_date_YYYYMMDD($filename = '')
{
  $dff = date_from_filename($filename);
  if ($dff == '') return '';
  return join('', explode('-', $dff));
}
