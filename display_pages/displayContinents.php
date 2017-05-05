<!--link to header-->
<div id="header"><?PHP include '../header.php'; ?></div>

<?PHP
	//assign variable submited via POST
	$continent = $_POST['continent'];

	echo "<h1>Cities in $continent</h1><br>";
?>

	<table class="table">
		<tr>
			<th>City</th>
			<th>Country</th>
		</tr>

		<?PHP
		  //form query string
		    $query= "SELECT City.City_Name, City.Part_Of
				FROM City, Country
				WHERE City.Part_Of = Country.Country_Name AND Country.Continent = '$continent'";
		
			  //execute query
			    if ($result = $dbcon->query($query)) {
					while($obj = $result->fetch_object()){
					
				    $cityName = $obj->City_Name;
				    $country = $obj->Part_Of;

				  //display query results in table
				    echo '<tr>';
				    	echo '<td>'.$cityName.'</td>';
				    	echo '<td>'.$country.'</td>';
				    echo '</tr>';
					}				
			 	} 
			?>
		</table>

<!--link to footer-->
<div id="footer"><?PHP include '../footer.php'; ?></div>
