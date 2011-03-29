<?php

define("WEB_ROOT", __DIR__);

define("APP_ROOT", realpath(WEB_ROOT . "/../"));
define("LIB", APP_ROOT . "/lib");

if (is_dir(realpath(APP_ROOT . "/../Spark2/lib"))) {
    define("SPARK_PATH", realpath(APP_ROOT . "/../Spark2/lib"));
} else {
    define("SPARK_PATH", realpath(LIB . "/Spark2/lib"));
}

//require_once SPARK_PATH . "/Spark.php";
require_once SPARK_PATH . "/../dist/Spark.phar";

// Require the app
require_once APP_ROOT . "/app.php";

Spark\run();
