<!DOCTYPE html>
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
		<h1>markdown</h1>
		<br><br>
<?php require 'markdown.php'; ?>
<!--	<?= Markdown(file_get_contents('doc.md')); ?> -->
		<form action="index.php" method="post">
			<textarea name="markdown" id="markdown" cols="30" rows="10"></textarea>
		</form>
	
	<br><br>
	<p>&copy; 2018 Designed by Fulmack<p>



	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="markitup/jquery.markitup.js"></script>
	<script type="text/javascript" src="markitup/sets/markdown/set.js"></script>
	<script type="text/javascript" >
   $(document).ready(function() {
   		mySettings.previewParserPath = 'parser.php';
      $("textarea").markItUp(mySettings);
   });
</script>
...
	</body>
</html>