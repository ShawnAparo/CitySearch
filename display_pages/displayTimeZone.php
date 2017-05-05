<!--link to header-->
<div id="header"><?PHP include '../header.php'; ?></div>

	<?PHP 
		$timeZone = $_POST['timeZone'];
		echo "<h1>Cities in $timeZone</h1><br>"
	?>

	<table class="table">
		<tr>
			<th>City</th>
			<th>Country</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Founded</th>	
			<th>Population</th>
			<th>Crime Rate</th>
		</tr>

		<?PHP
		  //form query string
		    $query = "SELECT c.City_Name, c.Part_Of, c.Latitude, c.Longitude, 
		  			c.Year_Founded, c.Population, c.Crime_Rate
				   FROM City c, Time_Zone t, Country cy 
				   WHERE c.Part_Of = cy.Country_Name 
				   AND c.In_Zone = t.TZ_ID 
				   AND t.TZ_Name = '$timeZone'";
	
		  //execute query
		 	if ($result = $dbcon->query($query)) {
				while($obj = $result->fetch_object()){
				
				    $cityName = $obj->City_Name;
				    $country = $obj->Part_Of;
				    $latitude = $obj->Latitude;
				    $longitude = $obj->Longitude;
				    $founded = $obj->Year_Founded;
				    $population = $obj->Population;
				    $crimeRate = $obj->Crime_Rate;

				  //display query results in table
				    echo '<tr>';
				    	echo '<td>'.$cityName.'</td>';
				        echo '<td>'.$country.'</td>';
				        echo '<td>'.$latitude.'</td>';
				        echo '<td>'.$longitude.'</td>';
				        echo '<td>'.$founded.'</td>';
				        echo '<td>'.$population.'</td>';
				        echo '<td>'.$crimeRate.'</td>';
				    echo '</tr>';
				}				
		 	} 
		?>
	</table>

<!--link to footer-->
<div id="footer"><?PHP include '../footer.php'; ?></div>