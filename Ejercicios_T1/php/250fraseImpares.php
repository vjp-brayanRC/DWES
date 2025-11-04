 <!-- Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares. -->

 <?php
 
 $cadena = "Soy brayan";
 $resultado = "";

 for($i = 0; $i< strlen($cadena); $i++) {
    if($i % 2 == 0){
        $resultado .= $cadena[$i];
    }
 }
echo "$resultado";

 ?>

 