<?php 
require('config.php');
?>
<head>
<title><?php echo($CONFIG['title']); ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<meta description="<?php echo($CONFIG['description']); ?>" />
<meta tags="rsps, runescape, private, server, swooperior, ventures, <?php echo($CONFIG['title'])?>" />
</head>
<body>
<div id="sitewrapper">
<div id="banner">
	<img href="index.php" src="<?php echo($CONFIG['bannergraphic']);?>" width="100%" alt="Banner Image" />
</div>
<div id="navbar">
<a href="index.php">HOME</a>
<a href="<?php echo($CONFIG['client']);?>">PLAY</a>
<a href="forum">FORUM</a>
<a href="#">DONATE</a>
</div>
<div id="contentwrapper">
<div id="innercontent">
