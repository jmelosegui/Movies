<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="ISO-8859"> 
	<title><?php echo formatTitle($title)?></title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 

	<link rel="stylesheet" href="//code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

</head> 
<body> 

<div data-role="page">

	<div data-role="header" data-theme="b">
	    <a href="./" rel="external" target="_top" data-icon="home" data-iconpos="notext" data-transition="fade">Home</a>
		<h1><?php echo $title?></h1>
	</div>

	<div data-role="content">