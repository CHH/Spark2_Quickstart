<?php
/*
 * Main Application bootstrap
 */

// Register some route
Spark()->route(function($routes) {
    // Match the server root
    $routes->get("/", function() {
        echo "<p><em>Spark</em> says</p>";
        echo "<h1>Hello World!</h1>";
    });
});
