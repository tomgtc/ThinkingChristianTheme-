<?php
//from http://www.catswhocode.com/blog/3-ways-to-compress-css-files-using-php, attributed to Reinhold Weber, Reinholdweber.com.
  header('Content-type: text/css');
  ob_start("compress");
  function compress($buffer) {
    /* remove comments */
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    /* remove tabs, spaces, newlines, etc. */
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
  }
	
  /* your css files */
include('style.css');


  ob_end_flush();
?>
