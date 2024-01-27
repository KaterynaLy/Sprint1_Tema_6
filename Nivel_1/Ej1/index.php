<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Tu nombre es:" . " " . $_POST['nombre'] . PHP_EOL;
    echo "Tu correo electronico es:" . " " . $_POST['email'] . PHP_EOL;
}