<?php
/**
*
*
*/
namespace Lib\arrays;

/**
*
*
*/
$array =[3,4,6,1,65,-3,6,10];
$a = $array;

/**
*
*
*/
function max($array){
  if(count($a)>0){
    $max=$a[0];
    for($i=1; $i<count($a); $i++){
      if($max<$a[$i]){
        $max = $a[$i];
      }
    }
    return $max;
  }else{
    return false;
  }
}
return 0;
}


/**
*
*
*/
function min($array){
  if(count($a)>0){
    $min=$a[0];
    for($i=1; $i<count($a); $i++){
      if($min>$a[$i]){
        $min = $a[$i];
      }
    }
    return $min;
  }else{
    return false;
  }
}
return 0;
}

/**
*
*
*/
function espejoMayor($array){
  return 0;
}
?>
