<?php

define("WEB_ROOT",   __DIR__);
define("APP_ROOT",   realpath(WEB_ROOT . "/../"));
define("LIB",        APP_ROOT . "/lib");
define("SPARK_PATH", LIB . "/Spark/lib");

// Load the Dev Version
require_once SPARK_PATH . "/lib/Spark.php";

// Require the app
require_once APP_ROOT . "/app.php";

SparkCore()->run(Spark());
