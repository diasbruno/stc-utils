<?php

function date_from_filename($filename = '')
{
  $pattern = '/(\d{4}-\d{2}-\d{2}).+$/';

  if (preg_match($pattern, $filename, $match)) {
    return join('', explode('-', $match[1]));
  }

  return '';
}

function format_date_YYYYMMDD($filename = '')
{
  $dff = date_from_file($filename); 
  if ($dff == '') return '';
  return join('', explode('-', $dff));
}
