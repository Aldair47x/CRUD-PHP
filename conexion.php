<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=Colores', 'root', 'ds');
    echo 'conectado';
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>