<?php
/*
 * Main Application bootstrap
 */

namespace Spark;

use Spark\Http\Response;

$app = new Application;

$app->set("views", __DIR__ . "/templates");

$app->before(function($app) {
    echo "<pre>";
    var_dump($app->request);
    echo "</pre>";
});

// Match the server root
$app->get("/", function() {
    echo "<h1>Hello Chrome!</h1>";
});

$app->get("/", array("user_agent" => "/Firefox/"), function() {
    echo "<h1>Hello Firefox!</h1>";
});

$app->get("/teapot_endpoint", function($app) {
    $app->halt(418);
});

$app->get("/not_there", function($app) {
    $app->halt(404);
});

$app->notFound(function($app) {
    $app->response->setStatusCode(200);
    echo "Not found";
});

$app->get("/google", $app->redirectTo("http://google.com"));

$app->after(function($app) {
    $app->response->write("Foo Bar");
});

/*
 * Render the layout
 */
/*
$app->shutdown(function($app) {
    $response = $app->response;
    $content  = $response->getContent();

    $response->setContent($app->phtml("layout", array("content" => $content))->getContent());
});
*/
