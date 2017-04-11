<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Helpy Search Engine</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<div class="search">
				<h1>Search</h1>
				<form action="results.php" method="get">
					<input type="text" name="query" placeholder="Search..">
					<div class="row search-buttons">
						<div class="col-md-5 col-md-offset-1">
							<button type="submit">Search</button>
						</div>
						<div class="col-md-5">
							<button type="submit">I'm feeling lucky</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>