<?php

define("WEB_ROOT", __DIR__);

define("APP_ROOT",   realpath(WEB_ROOT . "/../"));
define("LIB",        APP_ROOT . "/lib");

if (realpath(APP_ROOT . "/../Spark2")) {
    define("SPARK_PATH", realpath(APP_ROOT . "/../Spark2"));
} else {
    define("SPARK_PATH", LIB . "/Spark");
}

#require_once SPARK_PATH . "/dist/Spark.phar";
require_once SPARK_PATH . "/lib/Spark.php";

// Require the app
require_once APP_ROOT . "/app.php";

Spark\run();

