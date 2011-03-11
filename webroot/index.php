<?php

define("WEB_ROOT", __DIR__);

define("APP_ROOT",   realpath(WEB_ROOT . "/../"));
define("LIB",        APP_ROOT . "/lib");
define("SPARK_PATH", APP_ROOT. "/../Spark2/lib");

require_once SPARK_PATH . "/Spark.php";

// Require the app
require_once APP_ROOT . "/app.php";

Spark\run();
