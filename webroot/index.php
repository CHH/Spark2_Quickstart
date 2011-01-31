<?php

use Spark\App, Spark\HttpRequest, Spark\HttpResponse;

define("APP_ROOT",   realpath(__DIR__ . "/../"));
define("LIB",        APP_ROOT . "/lib");
define("SPARK_PATH", LIB . "/Spark/lib");

require_once SPARK_PATH . "/Spark.php";
require_once APP_ROOT   . "/app.php";

Spark::run();
