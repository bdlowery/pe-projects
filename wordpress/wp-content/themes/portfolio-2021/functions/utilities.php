<?php

//remove default WYSIWYG classes
function remove_p($text)
{
  // removes <p> from wysiwyg field when we don't want them
  return str_replace(array('<p>', '</p>'), '', $text);
}


//format code for debugging
function formatCode($code)
{
  echo "<pre>";
  var_dump($code);
  echo "</pre>";
}

/* this takes the CMS slug field for a given module and makes it visible in the CMS to act as a title so that we can tell what module is what back there. */
add_filter('acf/fields/flexible_content/layout_title', function ($title) {
  $ret = $title; // $ret ?
  if ($custom_title = get_sub_field('id')) {
    $ret = sprintf($title . ': ' . '<strong>' . $custom_title . '</strong>');
  }
  return $ret;
});
