<!--link to header-->
<div id="header"><?PHP include '../header.php'; ?></div>

	<?PHP 
		$population = $_POST['population'];

		switch($population){
			case "small":
				echo "<h1>Small Cities</h1>";
				break;
			case "medium":
				echo "<h1>Medium Sized Cities</h1>";
				break;
			case "large";
				echo "<h1>Large Cities</h1>";
				break;
			case "enormous";
				echo "<h1>Enormous Cities</h1>";
				break;
		}

		echo '<br>;'
	?>

	<table class="table">
		<tr>
			<th>City</th>
			<th>Country</th>
			<th>Population</th>
		</tr>

		<?PHP
		  //form query string
			switch($population){
				case "small":
					$query = "SELECT * FROM small_cities";
					break;
				case "medium":
					$query = "SELECT * FROM medium_cities";
					break;
				case "large":
					$query = "SELECT * FROM large_cities";
					break;
				case "enormous":
					$query = "SELECT * FROM enormous_cities";
					break;
			}

		  //execute query
		    if ($result = $dbcon->query($query)) {
			    while($obj = $result->fetch_object()){
				
				    $city = $obj->City_Name;
				    $country = $obj->Part_Of;
				    $population = $obj->Population;

				  //display query results in table
				    echo '<tr>';
				        echo '<td>'.$city.'</td>';
				        echo '<td>'.$country.'</td>';
				        echo '<td>'.$population.'</td>';
				    echo '</tr>';
				    }				
		    }  
		?>
	</table>

<!--link to footer-->
<div id="footer"><?PHP include '../footer.php'; ?></div>