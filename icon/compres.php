<!DOCTYPE html>
<html>
<head>
	<title>SORT UNIQ</title>
</head>
<body>

<?php
if (isset($_POST["filter"])) {
	$file = file_get_contents('file.html');
	$file = str_replace("</tr>", "</tr>~", $file);
	$ex 	= explode("~", $file);
	$newData = array_unique($ex);

	$newFile = "";
	foreach($newData as $data) {
		$newFile .= $data;
	}
	file_put_contents("newIcon.html", $newFile);
}

?>

<form action="" method="post">
	<button name="filter">Filter Uniq</button>
</form>

<script type="text/javascript">
	
</script>
</body>
</html>