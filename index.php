<?php

    require("config.php");
    $action = isset($_GET["action"]) ? $_GET["action"] : "";

    switch($action) {
        case "user":
            user();
            break;
        default:
            homepage();
    }

    function user() {
        $id = 0;
        if (!isset($_GET["id"])) {
            // set $id to user's id
        } else {
            $id = $_GET["id"];
            $results["pageTitle"] = "User Profile";
            require("/templates/user.php");
        }
    }

?>
