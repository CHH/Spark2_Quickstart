<?php
/*
 * Main Application bootstrap
 */

// Register some route
Spark()->route(function($r) {

    // Match the server root
    $r->match("/", function() {
        echo "<p><em>Spark</em> says</p>";
        echo "<h1>Hello World!</h1>";
    });
});
