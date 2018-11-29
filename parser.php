<html>
<head>
	<title>markdown</title>
	<meta charset="utf-8">
	<!--	Liens css	-->
	<link rel="stylesheet" type="text/css" href="markitup/skins/markitup/style.css" />
	<link rel="stylesheet" type="text/css" href="markitup/sets/default/style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

<?php 
require 'markdown.php'; 
echo(Markdown($_POST['data']));
/*Markdown($_POST['data']);
 */

?>

</body>

</html>
