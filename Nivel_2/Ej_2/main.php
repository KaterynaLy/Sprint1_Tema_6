<?php
include("path_new.php");

$path = new Path("\Documentos & CV\DNI Kateryna 55462890T.pdf");
echo $path->getFile();
echo $path->getDirection();