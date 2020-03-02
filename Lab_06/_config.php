<?php

function normalizing_slashes ($path) {
    return str_replace('\\', '/', $path);
}

//setting our root file path
// var_dump( dirname(__FILE__));
$path = normalizing_slashes(dirname(__FILE__)  . "\_includes");
set_include_path($path);

  //settimng our root link path
  $document_root = normalizing_slashes($_SERVER['DOCUMENT_ROOT']);
  //var_dump($document_root);

  $application_root = normalizing_slashes(dirname(__FILE__));
  //var_dump($application_root);

$link_path = str_replace($document_root, null, $application_root);
//var_dump($link_path);

define('BASE_PATH' ,$link_path);
?>