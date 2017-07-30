<?php

require_once(dirname(__FILE__) . "/enviromentPaths.php");

//Put some functions here that when called return HTML, and may take some arguments.


/**
* @brief This function returns a default HEAD element section
*
* @param $titleElement  The string to set the title element to
*
* @return Complete HTML HEAD section
 */
function buildHead($titleElement = "put your title here"){

    $head = <<<EOH
       	<head>
	        <meta charset="utf-8">

	        <title>$titleElement</title>


	     </head>
EOH;


    return $head;
}



/**
    * @brief This function will return HTML for the nav bar
    *
    * @return
 */
function navbar(){

    $site_url = SITE_URL;

    $nav = <<<EON


    <nav class="menu">
      <ul>
        <li><a href="$site_url/">Home</a></li>
        <li><a href="$site_url/about.php">About</a></li>
      </ul>
    </nav>


EON;

    return $nav;


}


/**
    * @brief creates the Footer HTML
    *
    * @return
 */
function footer(){

    $year = date("Y");


    $footer = <<<EOF
    <footer>
      A footer with some copyright info?  and a year $year thats always current.
    </footer>
EOF;

return $footer;

}

?>
