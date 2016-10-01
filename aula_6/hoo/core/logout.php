<?php

require "settings.php";

if(! isset($_SESSION)) session_start();

session_destroy();

header("location: " . $URL_PATH ."login.php");
