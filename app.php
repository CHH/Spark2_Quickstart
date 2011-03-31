<?php
/*
 * Main Application bootstrap
 */

namespace Spark;

$app = new Application;
$h   = $app->helpers;

$app->set("views", APP_ROOT . "/templates");

// Match the server root
$app->get("/", array("user_agent" => "/(Chromium|Chrome)/"), function() {
    return "<h1>Hello Chrome!</h1>";
});

$app->get("/", array("user_agent" => "/Firefox/"), function() {
    return "<h1>Hello Firefox!</h1>";
});

$app->get("/teapot_endpoint", function() {
    return 418;
});

$app->get("/not_there", function() {
    halt(404);
});

$app->notFound(function() {
    echo "Not found";
});

$app->get("/google", $app->redirectTo("http://google.com"));

/*
 * Render the layout
 */
$app->after(function($req, $resp) use ($app, $h) {
    $response = $app->response();
    $content  = $response->getContent();

    $response->setContent($h->phtml("layout", array("content" => $content))->getContent());
});

