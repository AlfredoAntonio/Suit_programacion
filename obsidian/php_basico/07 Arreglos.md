 los arreglos en PHP  pueden combinar tipos de datos sin ningún problema 
 para imprimir un arreglo se utiliza el print_r
 ejemplo 

<?php
$calificaciones =[100,99,78,67,78];
$arreglo=["hola mundo",24,true];
echo"<pre>";
print_r($calificaciones);
echo"</pre>";
?>
![[Pasted image 20230827212742.png]]

 objetos en php unicamente existen cuando son instancias de una clase PHP