<?php

    require("config.php");
    $action = isset($_GET["action"]) ? $_GET["action"] : "";

    switch($action) {
        case "user":
            user();
            break;
        case "story":
            story();
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
            require("templates/user.php");
        }
    }

    function story() {
        if (!isset($_GET["id"])) {
            homepage();
        } else {
            $id = $_GET["id"];
            $results["styles"] = "story";

            if (isset($_GET["chp"])) {
                $chp = $_GET["chp"];
                $results["pageTitle"] = "Story Name - Chapter N";
                require("templates/storyChapter.php");
            } else {
                $results["pageTitle"] = "Story Name by Author";
                require("templates/story.php");
            }

        }

    }

?>
