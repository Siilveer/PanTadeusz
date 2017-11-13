<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<title>Pan Tadeusz</title>
</head>
<body>
	<header class=container>
		<h1>
			Pan Tadeusz, czyli Ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem
		</h1>
	</header>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<a href="index.php"><p>Spis Treści</p></a>
				<ul class="list-group">
<?php
	for ($i=1; $i <13 ; $i++) { 
		echo "<li class='list-group-item list-group-item-info'><a href='./index.php?k=$i'>Księga $i</a></li>";	
	}
	?>

</ul>
</div>
<div class="col-md-8 col-sm-12">
<?php
	$k = $_GET['k'];
	if (!isset($_GET['k'])) {

		echo "<img src='./tadek.jpg'>";
	}
	require_once("./k$k.html");
?>
</div>
</div>
</div>
<p class=" alert alert-info">(c) Mateusz Sajler, Uniwersytet Ekonomiczny w krakowie</p>
<footer class="fixed-bottom">
	
</footer>
</body>
</html>