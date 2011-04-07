<?php

require_once realpath(__DIR__ . "/../lib/Spark_Http_Server/src/_autoload.php");
require_once realpath(__DIR__ . "/../lib/spark.phar");

use Spark\Http\Server as HttpServer,
    Spark\Http\Request;

$server = new HttpServer;

$server->run(function($env) {
    include realpath(__DIR__ . "/../app.php");

    parse_str($env["QUERY_STRING"], $params);

    $request = Request::create(
        $env["REQUEST_URI"],
        $env["REQUEST_METHOD"],
        $params,
        array(),
        array(),
        $env->getArrayCopy()
    );

    $app->disable("send_response");
    $response = $app->run($request);
    
    return array(
        $response->getStatusCode(),
        $response->headers->all(),
        $response->getContent()
    );
});

$server->listen(8080);
