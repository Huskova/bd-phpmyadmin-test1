<!DOCTYPE html>
<html>
<head>
	<title>my site</title>
</head>
<body>

<a href="add.php">Добавить новость</a>

<?php

include_once("db.php");

$result = mysql_query(" SELECT * FROM news 
						ORDER BY id DESC"); //Descending
//ORDER BY id data time etc DESC
// $result = mysql_query(" SELECT * FROM news ORDER BY id DESC LIMIT 2"); //show last 2 news
//$result = mysql_query(" SELECT * FROM news WHERE author = 'Verok' ORDER BY id DESC"); //show news with author
//Add OR AND a lot of value

//---

//Select just 2 topic - title, text, data, author, img etc.
//$result = mysql_query(" SELECT title, text FROM news 
//							ORDER BY id DESC");

//---
//Select with variable
//$name = "Verok";
//$limit = 5;
//$result = mysql_query(" SELECT * FROM news 
//							WHERE author = '$name' 
//							ORDER BY id DESC 
//							LIMIT $limit
//");



//single value title/array
// $row = mysql_fetch_row($result);

// echo $row[1];
// echo $row[2];


//all title value/array
//Show in html code
while ($row = mysql_fetch_row($result))
{?>
	<h1>Title: <?php echo $row[1]?></h1>
	<h2>Text: <?php echo $row[2]?></h2>
	<h3>Img: <?php echo $row[3]?></h3>
	<h4>Date: <?php echo $row[4]?></h4>
	<h5>Time: <?php echo $row[5]?></h5>
	<h6>Author: <?php echo $row[6]?></h6>
	<hr>
<?php } ?>
<?php
// clode db connection
mysql_close();

?>



</body>
</html>