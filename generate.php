<?php

	
/* class for generate */
function add_dot($str){ 
  if(strlen($str) > 1){ 
    $ca = preg_split("//",$str); 
    array_shift($ca); 
    array_pop($ca); 
    $head = array_shift($ca); 
    $res = add_dot(join('',$ca)); 
    $result = array(); 
    foreach($res as $val){ 
      $result[] = $head . $val; 
      $result[] = $head . '.' .$val; 
    } 
    return $result; 
  } 
  return array($str); 
} 

/* end */

?>