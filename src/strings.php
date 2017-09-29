 <?php
/**
*
*
*/
namespace Lib\strings;
/**
*
*
*/
$txt="a3d<->l44";

echo $txt;
echo "<br><br>";
/**
*
*
*/
function flechaMedio($txt){

    if($txt !="") {
      $i = strlen($txt)/2;
      $i = intval($i);
      // encuentra la secuencia de caracteres en la mitad
      if($txt[$i]=="-") {
        $cadena = $i;
        // más de 2 caracteres en la primera mitad
      }elseif($txt[$i+1]=="-") {
        $cadena =$i;
        // más de 2 caracteres en la segunda mitad
      }

      elseif($txt[$i-1] == "-") {
        $cadena = $i;
      }else{

        return false;
      }

      if($txt[$cadena-1] == "<" && $txt[$cadena+1] == ">"){
        return true;

      }else{
        return false;

      }
    }
  }
  echo "el resultado es: " .BuscarCoincidenciaEnUnString($txt);

}
?>
