<?php

  require_once(dirname(__FILE__) . "/enviromentPaths.php");

  /*
    IMPORTANT NOTE: If these function look odd please note that we are using php heredoc syntax.
    http://us3.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
  */

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
