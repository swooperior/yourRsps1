<?php error_reporting(E_ALL);
require('dbcon.php'); 
echo("<div id='recentnews'><p><h1>Recent News</h1></p>");

$articles = mysqli_query($GLOBALS['link'], "SELECT * FROM `rsps_posts` WHERE forum_id = 2 && post_subject NOT LIKE 'Re:%' ORDER BY post_id DESC LIMIT 5;")or die(mysqli_error($GLOBALS['link']));

foreach($articles as $article){
	echo("<h3>".date("d-m-Y @ h:ia",$article['post_time'])."</h3>");
	echo("<h2><a target='_blank' href='forum/viewtopic.php?f=".$article['forum_id']."&t=".$article['topic_id']."&p=".$article['post_id']."'>".$article['post_subject']."</a></h2>");
		$articlebody = substr($article['post_text'],0,250);
	echo($articlebody."...<br>");
	echo('<p><center>-------------------</center></p>');
}
echo('</div>');


?>