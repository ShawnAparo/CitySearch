<?PHP
	$username="citysearch";
	$password="citysearch17";
	$database="citysearch";
	$server="localhost";

	// Create a new database connect object
	$dbcon=new mysqli($host, $username, $password, $database);

	// Check connection
	if($dbcon->connect_error) die ($dbcon->connect_error);

	// Make the database connection globally
	global $dbcon;
?>