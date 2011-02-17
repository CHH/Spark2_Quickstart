<?php

define("WEB_ROOT",   __DIR__);
define("APP_ROOT",   realpath(WEB_ROOT . "/../"));
define("LIB",        APP_ROOT . "/lib");
define("SPARK_PATH", LIB . "/Spark/lib");

// Load the Dev Version
require_once SPARK_PATH . "/Spark.php";

// Require the app
require_once APP_ROOT . "/app.php";

Spark()->set("return_response", true);

$response = Spark::run(Spark());

$content = $response->getContent();

ob_start();
include APP_ROOT . "/layouts/default.phtml";
$response->setContent(ob_get_clean());

$response->send();
