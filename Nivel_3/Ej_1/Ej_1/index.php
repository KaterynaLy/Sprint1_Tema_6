<?php
include("recurso.php");

$recurso = new Recurso("PHP inicio", "CSS inicio", "https://dev.to/educative/php-tutorial", "./archivos/test.jpg");

echo $recurso->getNom();
echo $recurso->getTema();
echo $recurso->getSite();
echo $recurso->getAdjunto();





