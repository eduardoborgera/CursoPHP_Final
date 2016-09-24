<?php

if(! isset($_SESSION)) session_start();

session_destroy();

header("location: pagina_5.php");
