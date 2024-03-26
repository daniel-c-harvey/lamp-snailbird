<?php require('include/util/css.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="Daniel Harvey's Personal Website - A blog about music and engineering.">
	<meta name="keywords" content="daniel, harvey, the.real.daniel.harvey, danielharvey, danny, space, music, engineering, art, programmer, programming, software, synthesizer, drum, modular, electrical, electronic, techno">
	<meta name="author" content="Daniel Harvey">
	<meta name="google-site-verification" content="X9Mi71hau9xsJVo5Ej3EP4UER11N42Icfqd5nbudHK4" />  <!-- TODO update verification-->
	<title>Snailbird Studio</title>
	
	<?php linkToStylesheet('base.css'); 
		  linkToStylesheet("structural.css"); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="js/post.js"></script>
	<script src="js/video.js"></script>
</head>

<body>
<?php include('include/header.php'); ?>
	<div id="contentstrip">
		<?php include('include/studio.php'); ?>
		<?php include ('include/footer.php'); ?>
	</div>
</body>
</html>