<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
<head>
<body>
    <?php
    $limite = 50;
    for ($i = 1; $i <= $limite; $i++) {
        # Impresion de los numeros del 0 al 50
        echo    "Numero: $i<br>";
    
    }
    //ciclo while 
    $limite = rand(50, 100);
    $inicio = 1;
    #impresion de numeros del 1 al limite aleatorio entre (50 ,100)
    While ($inicio <= $limite){
        echo "[WHILE] Numero: " . $inicio . "<br>";
        $inicio++;
    }
    //do while
    $dia = date("d");
    $inicio = rand(10, 20);
    #Mostrar los numeros del 1 a la fecha actual
    do{
        echo "[DO-WHILE] Numero: " . $inicio . "<br>";
        $inicio++;
    } while ($inicio <= $dia);
    //Mostrar la tabla de multiplicar del 2 
    #utilizar FOR,WHILE y DO-WHILE
    for ($i = 1; $i <= 10; $i++) {
        echo "[FOR] 2 x $i = " . (2 * $i) . "<br>";
    }
    $i = 1;
    while ($i <= 10) {
        echo "[WHILE] 2 x $i = " . (2 * $i) . "<br>";
        $i++;
    }
    $i = 1;
    do {
        echo "[DO-WHILE] 2 x $i = " . (2 * $i) . "<br>";
        $i++;
    } while ($i <= 10);
    ?>
</body>
</html>