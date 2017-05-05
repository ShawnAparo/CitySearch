<!--link to header-->
<div id="header"><?PHP include 'header.php'; ?></div>

<table border="1">

	<!--SELECT CITY BY COUNTRY-->
	<tr>
		<td><label>Search for Cities by Country <label></td>
		<td>
			<form method="post" action="display_pages/displayCountry.php">
			<select name="countryName" class="form-control">		
				<?PHP		
					echo "<option>Select a country</option>"; 

					// Form SQL query string
					$query= "SELECT Country_Name FROM Country";
					//Execute SQL query and try to receive result
					if ($result = $dbcon->query($query)) {
						while ($obj = $result->fetch_object()) {
							$country = $obj->Country_Name;
							echo "<option>",$country,"\n";
						}
					}
				?>
			</select>
			<input type="submit" class="btn btn-primary" value="Search">
		</form>
		</td>
	</tr>
	
	<!--SELECT CITY BY TIME ZONE-->
	<tr>
		<td><label>Search for cities residing in a certain time zone <label></td>

		<td>
		<form method="post" action="display_pages/displayTimeZone.php">
			<select name="timeZone" class="form-control">		
				<?PHP		
					echo "<option>Select a zone</option>"; 

					// Form SQL query string
					$query= "SELECT TZ_Name FROM Time_Zone";
					
					//Execute SQL query and try to receive result
					if ($result = $dbcon->query($query)) {
						while ($obj = $result->fetch_object()) {
							$timeZone = $obj->TZ_Name;
							echo "<option>",$timeZone,"\n";
						}
					}
				?>
			</select>
			<input type="submit" class="btn btn-primary" value="Search">
		</form>
		</td>
	</tr>

	<!--display founding year of selected city-->
	<tr>
		<td><label>Select a city to display founding year <label></td>
		<td>
		<form method="post" action="display_pages/displayFoundingYear.php">
			<select name="city" class="form-control">		
				<?PHP		
					echo "<option>Select a city</option>"; 

					// Form SQL query string
					$query= "SELECT City_Name FROM City";
					
					//Execute SQL query and try to receive result
					if ($result = $dbcon->query($query)) {
						while ($obj = $result->fetch_object()) {
							$city = $obj->City_Name;
							echo "<option>",$city,"\n";
						}
					}
				?>
			</select>
			<input type="submit" class="btn btn-primary" value="Search">
		</form>
		</td>
	</tr>

	<!--display cities by spoken language-->
	<tr>
		<td><label>Select a language to see where it is spoken <label></td>
		<td>
		<form method="post" action="display_pages/displayLanguage.php">
			<select name="language" class="form-control">		
				<?PHP		
					echo "<option>Select a language</option>"; 

					// Form SQL query string
					$query= "SELECT L_Name FROM Language";
					
					//Execute SQL query and try to receive result
					if ($result = $dbcon->query($query)) {
						while ($obj = $result->fetch_object()) {
							$language = $obj->L_Name;
							echo "<option>",$language,"\n";
						}
					}
				?>
			</select>
			<input type="submit" class="btn btn-primary" value="Search">
		</form>
		</td>
	</tr>

	<!--display safety-->
	<tr>
		<td><label>Select a crime rate to display cities <label></td>
		<td>
		<form method="post" action="display_pages/displayCrimeRate.php">
			<select name="crimeRate" class="form-control">	
				<option>Select a rate</option>	
				<option value='low'>Low</option>
				<option value='moderate'>Moderate</option>
				<option value='severe'>Severe</option>
			</select>
			<input type="submit" class="btn btn-primary" value="Search">
		</form>
		</td>
	</tr>

	<!--display population-->
	<tr>
		<td><label>Select a population size to view cities <label></td>
		<td>
		<form method="post" action="display_pages/displayPopulation.php">
			<select name="population" class="form-control">	
				<option>Select a size</option>	
				<option value='small'>Small</option>
				<option value='medium'>Medium</option>
				<option value='large'>Large</option>
				<option value='enormous'>Enormous</option>
			</select>
			<input type="submit" class="btn btn-primary" value="Search">
		</form>
		</td>
	</tr>

	<!--Display by continent-->
	<tr>
		<td><label>Select a continent</label></td>
		<td>
			<form method="post" action="display_pages/displayContinents.php">
				<select name="continent" class="form-control">
					<option>Select a continent</option>
					<option value="Africa">Africa</option>
					<option value="Antarctica">Antarctica</option>
					<option value="Asia">Asia</option>							
					<option value="Australia">Australia</option>
					<option value="Europe">Europe</option>
					<option value="North America">North America</option>
					<option value="South America">South America</option>
				</select>
				<input type="submit" class="btn btn-primary" value="Search">
			</form>
		</td>
	<tr>	

<!--link to footer-->
<div id="footer"><?PHP include 'footer.php'; ?></div>


			
