<?php

    ini_set("display_errors", true); // Set false on prod server
    date_default_timezone_set("Europe/London");

    define("DB_DSN", "mysql:host=localhost;dbname=fictionsite");
    // Change this on prod server
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "toor");

    $config = array();
    $GLOBALS["documentroot"] = "/fiction-site";

    function handleException($exception) {
        echo "An error has occured, please try again later.";
        echo "Message details: " . $exception->getMessage();
        error_log($exception->getMessage());
    }

    set_exception_handler('handleException');

?>
