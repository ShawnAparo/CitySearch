<!--link to header-->
<div id="header"><?PHP include '../header.php'; ?></div>

<?PHP 
	//assign variable submited via POST
	$countryName = $_POST['countryName'];
	echo "<h1>Cities in $countryName</h1><br>";
?>

		<table class="table">
			<tr>
				<th>City</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Founded</th>	
				<th>Population</th>
				<th>Crime Rate</th>
				<th>Time Zone</th>
			</tr>

			<?PHP
			  //form query string
				$query= "SELECT c.City_Name, c.Latitude, c.Longitude, c.Year_Founded, 
							c.Population, c.Crime_Rate, t.TZ_Name
						FROM City c, Time_Zone t, Country cy 
						WHERE c.Part_Of = cy.Country_Name AND c.In_Zone = t.TZ_ID 
						AND cy.Country_Name = '$countryName'";
			
			  //execute query
			    if ($result = $dbcon->query($query)) {
					while($obj = $result->fetch_object()){
						
				    	$cityName = $obj->City_Name;
				  		$latitude = $obj->Latitude;
				  		$longitude = $obj->Longitude;
				 		$founded = $obj->Year_Founded;
				    	$population = $obj->Population;
				    	$crimeRate = $obj->Crime_Rate;
				    	$timeZone = $obj->TZ_Name;

				 	  //display query results in table
				  		echo '<tr>';
				  			echo '<td>'.$cityName.'</td>';
				    		echo '<td>'.$latitude.'</td>';
				    		echo '<td>'.$longitude.'</td>';
				    		echo '<td>'.$founded.'</td>';
				   			echo '<td>'.$population.'</td>';
				    		echo '<td>'.$crimeRate.'</td>';
				    		echo '<td>'.$timeZone.'</td>';
				  		echo '</tr>';
					}				
			    } 
			?>
		</table>

<!--link to footer-->
<div id="footer"><?PHP include '../footer.php'; ?></div>
