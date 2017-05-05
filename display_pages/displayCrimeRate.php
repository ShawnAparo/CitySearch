<!--link to header-->
<div id="header"><?PHP include '../header.php'; ?></div>

	<?PHP 
		$crimeRate = $_POST['crimeRate'];
		switch($crimeRate){
			case "low":
				echo "<h1>Safe Cities</h1>";
				break;
			case "moderate":
				echo "<h1>Be aware of your surroundings</h1>";
				break;
			case "severe";
				echo "<h1>Look out!</h1>";
				break;
		}
		echo '<br>';
	?>

	<table class="table">
		<tr>
			<th>City</th>
			<th>Country</th>
			<th>Crime Rate</th>
		</tr>

		<?PHP
		  //form query string
			$crimeRate = $_POST['crimeRate'];
			switch($crimeRate){
				case "low":
					$query = "SELECT * FROM safe_cities";
					break;
				case "moderate":
					$query = "SELECT * FROM moderately_safe_cities";
					break;
				case "severe";
					$query = "SELECT * FROM dangerous_cities";
					break;
			}
	
		  //execute query
			if ($result = $dbcon->query($query)) {
				while($obj = $result->fetch_object()){
				
				  	$city = $obj->City_Name;
				  	$country = $obj->Part_Of;
				  	$crimeRate = $obj->Crime_Rate;

				  //display query results in table
				 	echo '<tr>';
				    	echo '<td>'.$city.'</td>';
				    	echo '<td>'.$country.'</td>';
				    	echo '<td>'.$crimeRate.'</td>';
				  	echo '</tr>';
				}				
		  	} 
		?>

	</table>

<!--link to footer-->
<div id="footer"><?PHP include '../footer.php'; ?></div>