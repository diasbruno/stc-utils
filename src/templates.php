<?php

/**
 * Render a view with .
 * @param $template string | The template filename.
 * @param $scope array | The hash with the components to be injected.
 * @return string
 */
function view($page, $scope = array())
{
  extract($scope);
  ob_start();
  include $page;
  $contents = ob_get_contents();
  ob_end_clean();
  return $contents;
}
