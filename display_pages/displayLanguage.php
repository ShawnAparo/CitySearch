<!--link to header-->
<div id="header"><?PHP include '../header.php'; ?></div>

	<?PHP 
		$language = $_POST['language'];
		echo "<h1>Cities that speak $language</h1><br>";
	?>

	<table class="table">
		<tr>
			<th>City</th>
			<th>Country</th>
		</tr>

		<?PHP
		  //form query string
			$query= "SELECT City.City_Name, City.Part_Of
					FROM City JOIN Languages_Spoken ON City.C_ID=Languages_Spoken.C_ID 
					WHERE Languages_Spoken.L_Name = '$language' 
					ORDER BY City_Name ASC";
		
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