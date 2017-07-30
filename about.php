<?php
 require_once(dirname(__FILE__) . '/php/enviromentPaths.php' );
?>

<!DOCTYPE html>
<html lang="en">

<?php
    //Loading the HTML Head
    require_once (PUBLIC_ROOT_FILEPATH . '/php/contentWriteFunction.php');
    echo buildHead("About Page");

?>

    <body>

	<?php
	 echo navbar();
	?>

  <h1>About</h1>

  <p>The about page contents goes here...</p>

	<?php
	//Show the standardized footer
	 echo footer();
	 ?>

    </body>
</html>
