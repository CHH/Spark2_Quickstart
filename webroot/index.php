<?php

define("WEB_ROOT",   __DIR__);
define("APP_ROOT",   realpath(WEB_ROOT . "/../"));
define("LIB",        APP_ROOT . "/lib");
define("SPARK_PATH", LIB . "/Spark/lib");

// Load the Framework
require_once SPARK_PATH . "/Spark.php";

// Bootstrap the Application
require_once APP_ROOT   . "/app.php";

Spark::run();
