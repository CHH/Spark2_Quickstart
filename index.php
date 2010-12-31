<?php

namespace Application;

use Spark\App, Spark\HttpRequest, Spark\HttpResponse;

define("APP_ROOT",   __DIR__);
define("LIB_PATH",   __DIR__ . "/lib");
define("SPARK_PATH", __DIR__ . "/lib/Spark/lib");

require_once SPARK_PATH . "/Spark.php";

$app = new App;

$app->routes->get("/", function() {
    echo "<p><em>Spark</em> says: </p><h1>It works!</h1>";
});

// Dispatch the request and send the response
$app(new HttpRequest, new HttpResponse);
