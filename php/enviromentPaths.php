<?php

    //Required environment variables, SITE_URL must be set.
    //This is used for getting the PATH for require or includes path to the root of the project in publically accessable root of the project.
    $PUBLIC_ROOT_FILEPATH = dirname(dirname(__FILE__));
    define ("PUBLIC_ROOT_FILEPATH", $PUBLIC_ROOT_FILEPATH);

    //This is the site URL aka the domain or basepath of this website for example: http://www.example.com This is meant to resolve URLs sans the trailing /
    $SITE_URL = getenv("SITE_URL");
    if (!empty($SITE_URL)) {
      define("SITE_URL", $SITE_URL);
    }else {
      echo "<h1 style=\"color:red\">ERROR: SITE_URL environment is not set, please set it.</h1>";
    }


?>
