<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$search = $_GET['query'];

	$mysqli = new mysqli("localhost", "helpy", "helpy1", "searchEngine");
	$result = $mysqli->query("SELECT * FROM results WHERE title LIKE '%".$search."%'");	



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Results for <?php echo $search; ?></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div class="search-again">
				<div class="row">
					<form method="get">
						<div class="col-md-3 text-center">
							<h1><a href="index.php">Search</a></h1>
						</div>
						<div class="col-md-6">
							<input type="text" name="query" value="<?=$search;?>">
						</div>
						<div class="col-md-2">
							<button type="submit">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="results">
		<div class="col-md-12">
			<?php if($result->num_rows) { ?>
			<?php while($a = $result->fetch_assoc()) { ?>
			<div class="result">
				<h4 class="title"><a href="<?=$a['url'];?>"><?= $a['title']; ?></a></h4>
				<p class="link"><?=$a['url'];?></p>
				<p class="description"><?=$a['description'];?></p>
			</div>
			<?php } ?>
			<?php } else { ?>
			<p>Sorry, no results found.</p>
			<?php } ?>

		</div>
	</div>
</body>
</html>
