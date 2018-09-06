<?php defined('is_running') or die('Not an entry point...');
// encoding UTF-8 ÄÖÜäöüß

function RobotoSans_getHead() {
  global $page, $addonRelativeCode;
  $page->css_user[] =  $addonRelativeCode . '/css/Roboto.css';
}

function RobotoSans_addToCKEditor_FontList($options) { 
  if ( $options['font_names'] == "" ) {
    $defined_font_names =   "Arial/Arial,Helvetica,sans-serif;" .
                            "Comic Sans MS/Comic Sans MS,cursive;" .
                            "Courier New/Courier New,Courier,monospace;" .
                            "Georgia/Georgia,serif;" .
                            "Lucida Sans Unicode/Lucida Sans Unicode,Lucida Grande,sans-serif;" .
                            "Tahoma/Tahoma,Geneva,sans-serif;" .
                            "Times New Roman/Times New Roman,Times,serif;" .
                            "Trebuchet MS/Trebuchet MS,Helvetica,sans-serif;" .
                            "Verdana/Verdana,Geneva,sans-serif";
  } else {
    $defined_font_names = $options['font_names'];
  }
  $options['font_names'] =  "Roboto Thin/roboto-thin,sans-serif;" . 
                            "Roboto Light/roboto-light,sans-serif;" . 
                            "Roboto/roboto,sans-serif;" . 
                            "Roboto Medium/roboto-medium,sans-serif;" . 
                            "Roboto Bold/roboto-bold,sans-serif;" . 
                            "Roboto Cnd Light/roboto-condensed-light,sans-serif;" .
                            "Roboto Cnd/roboto-condensed,sans-serif;" . 
                            $defined_font_names; // appends standard/prevoiusly defined fonts to the list
  return $options;
}

?>