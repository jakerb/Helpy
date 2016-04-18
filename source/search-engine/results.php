<?php
	
	$search = $_GET['query'];

	mysql_connect("HOST", "USERNAME", "PASSWORD") or die(mysql_error());
	mysql_select_db("searchengine");

	$query = mysql_query("SELECT * FROM results WHERE title LIKE '%".$search."%'");
	if(mysql_num_rows($query) >= 1) {
		while($a = mysql_fetch_array($query)) {
			echo "<a href='".$a['url']."'>".$a['title']."</a><p>".$a['description']."</p><hr/>";
		}

	} else {
		echo "Oh no! Nothing was found.";
	}


?>