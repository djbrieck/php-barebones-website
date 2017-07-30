<?php
 require_once(dirname(__FILE__) . '/php/enviromentPaths.php' );
?>

<!DOCTYPE html>
<html lang="en">

<?php
    //Loading the HTML Head
    require_once (PUBLIC_ROOT_FILEPATH . '/php/contentWriteFunction.php');
    echo buildHead("Barebones php site");

?>

    <body>

	<?php
	 echo navbar();
	?>

  <h1>Welcome to your new phpBareBones site</h1>

  <p>This is all there is too it, yes its really bare bones but that is what you were looking for.</p>
  <p>It does have headers, footers and navigation links.</p>
  <p>It has the basics to get started.</p>

	<?php
	//Show the standardized footer
	 echo footer();
	 ?>

    </body>
</html>
