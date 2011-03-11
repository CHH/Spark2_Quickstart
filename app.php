<?php
/*
 * Main Application bootstrap
 */

namespace Spark;

set("views", APP_ROOT . "/templates");

// Match the server root
get("/", array("user_agent" => "/(Chromium|Chrome)/"), function() {
    return "<h1>Hello Chrome!</h1>";
});

get("/", array("user_agent" => "/Firefox/"), function() {
    return "<h1>Hello Firefox!</h1>";
});

get("/teapot_endpoint", function() {
    return 418;
});

get("/not_there", function($request) {
    halt(404);
});

notFound(function() {
    echo "Not found";
});

get("/google", redirectTo("http://google.com"));

/*
 * Render the layout
 */
after(function($request, $response) {
    $content = $response->getContent();
    
    $response->setContent(phtml("layout", array("content" => $content))->getContent());
});
