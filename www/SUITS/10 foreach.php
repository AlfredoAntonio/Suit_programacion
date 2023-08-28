<?php
$persona=[
    "nombre"=>"ALFREDO",
    "edad"=>29,
    "direccion"=> [
        "ciudad">="CDMX",
        "alcaldia" =>"Milpa alta",
        "pueblo" => "San juan"
    ],
    "calificacion"=>[12,23,34,45,67,78]
    ];

$calificaciones=[100,99,89,78,67,78];
$arreglo=["hola mundo",24,true];

foreach($calificaciones as $calificacion){
print($calificacion);
echo"<br>";
}
 /*foreach($calificaciones as $calificacion); endforeach;*/

foreach($persona as $llave=>$valor){
    print("llave: ".llave."valor: ".$valor);
    print(gettype($valor));
    echo"<br>";
}
?>


