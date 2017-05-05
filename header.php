<?PHP
echo '<html lang="en">';
	echo '<head>';
		echo '<title>City Search</title>';
		echo '<meta charset="utf-8">';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
		echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
	echo '</head>';
	echo'<body>';
		echo '<style>body{padding-top: 50px;}</style>';
		include 'dbConnect.php';
?>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		    <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">CitySearch</a>
			    </div>
		        <ul class="nav navbar-nav">
			      <li class="active"><a href="http://weblab.salemstate.edu/~S0309774/citysearch/index.php">Home</a></li>
			    </ul>
		    </div>
		</nav>