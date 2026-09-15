<?php

    $productos = [
        ["Codigo" => "A0001", "descripcion" => "Mouse"],
        ["Codigo" => "A0002", "descripcion" => "Teclado"],
        ["Codigo" => "A0003", "descripcion" => "Monitor"],
        ["Codigo" => "A0004", "descripcion" => "Impresor"],
    ];

    foreach ($productos as $prod){
        echo $prod["Codigo"]." - ".$prod["descripcion"]."<br>";
    }