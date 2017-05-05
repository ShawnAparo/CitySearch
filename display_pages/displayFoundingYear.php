<!--link to header-->
<div id="header"><?PHP include '../header.php'; ?></div>

	<?PHP
		
		$city = $_POST['city'];

	  //form query string
		$query = "SELECT Year_Founded FROM City WHERE City.City_Name = '$city'";
	  
	  //execute query
		if ($result = $dbcon->query($query)) {
			while($obj = $result->fetch_object()){
				$year = $obj->Year_Founded;

				echo '<h3>'.$city.' was founded in '.$year.'</h3>';
			}				
		} 
	?>

<!--link to footer-->
<div id="footer"><?PHP include '../footer.php'; ?></div>