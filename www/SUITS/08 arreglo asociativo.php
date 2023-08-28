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

    echo"<pre>";
    print_r($persona);
    print_r($persona["nombre"]);
    print_r($persona["direccion"]["nombre"]);
    print_r($persona["alcaldia"]);
    print_r($persona["calificacion"][3]);
    echo"</pre>";

?>