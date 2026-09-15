<?phpe
echo "Nombre: Ignacio Sanchez. Curso:4A<br><br>";
// Ejercicio 1 
echo "<h3>Ejercicio 1</h3>";
$i = 1;
do {
    echo "Pedido N.o " . $i . "<br>";
    $i++;
} while ($i <= 15);

echo "<br><br>";

// Ejercicio 2 
echo "<h3>Ejercicio 2</h3>";
$nivel = 1;
do {
    echo "Nivel " . $nivel . " superado<br>";
    $nivel++;
} while ($nivel <= 10);

echo "<br><br>";

// Ejercicio 3 
echo "<h3>Ejercicio 3</h3>";
$asientos = 20;
do {
    echo "Asientos disponibles: " . $asientos . "<br>";
    $asientos--;
} while ($asientos >= 1);

echo "<br><br>";

// Ejercicio 4 
echo "<h3>Ejercicio 4</h3>";
$i = 10;
do {
    echo $i . "<br>";
    $i--;
} while ($i >= 1);


echo "<br><br>";

// Ejercicio 5 
echo "<h3>Ejercicio 5</h3>";
$pizzas = 1;
$preciopizza = 8000;
do {
    $total = $pizzas * $preciopizza;
    $texto = ($pizzas == 1) ? "pizza" : "pizzas";
    echo $pizzas . " " . $texto . " = $" . $total . "<br>";
    $pizzas++;
} while ($pizzas <= 8);

echo "<br><br>";

// Ejercicio 6 
echo "<h3>Ejercicio 6</h3>";
$repeticiones = 1;
$peso = 15;
do {
    $totalkilos = $repeticiones * $peso;
    $texto = ($repeticiones == 1) ? "repeticion" : "repeticiones";
    echo $repeticiones . " " . $texto . " = " . $totalkilos . " kg<br>";
    $repeticiones++;
} while ($repeticiones <= 12);

echo "<br><br>";

// Ejercicio 7 
echo "<h3>Ejercicio 7</h3>";
$cajas = 12;
$preciocaja = 2500;
do {
    $total = $cajas * $preciocaja;
    $texto = ($cajas == 1) ? "caja" : "cajas";
    echo $cajas . " " . $texto . " = $" . $total . "<br>";
    $cajas--;
} while ($cajas >= 1);

echo "<br><br>";

// Ejercicio 8 
echo "<h3>Ejercicio 8</h3>";
$entradas = 20;
$precioentrada = 12000;
do {
    $total = $entradas * $precioentrada;
    $texto = ($entradas == 1) ? "entrada" : "entradas";
    echo $entradas . " " . $texto . " = $" . $total . "<br>";
    $entradas--;
} while ($entradas >= 1);

echo "<br><br>";

// Ejercicio 9 
echo "<h3>Ejercicio 9</h3>";
$pedido = 1;
$preciopedido = 3500;
do {
    $total = $pedido * $preciopedido;
    echo "Pedido " . $pedido . " = $" . $total . "<br>";
    $pedido++;
} while ($pedido <= 10);
echo "Promocion terminada<br>";

?>