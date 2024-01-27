<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['email'] = $_POST['email'];
}

echo $_SESSION['nombre'] . $_SESSION['email'] . PHP_EOL;
