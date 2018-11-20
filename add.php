<!DOCTYPE html>
<html>
<head>
	<title>Add news</title>
</head>
<body>


<form method="post" action="add.php">
	<p>Название новости:</p>
	<input type="text" name="title">

	<p>Текст новости:</p>
	<textarea cols="40" rows="10" name="text"></textarea>

	<p>Автор новости:</p>
	<input type="text" name="author">
<!-- 	<input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>" />
	<input type="hidden" name="time" value="<?php echo date('h:i:s') ?>" /> -->
	<p></p>
	<input type="submit" name="add" value="add">
</form>

<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$title = strip_tags(trim($_POST['title']));
		$text = strip_tags(trim($_POST['text']));
		$author = strip_tags(trim($_POST['author']));
		// $date = $_POST['date'];
		// $time = $_POST['time'];

		if ($title && $text && $author) {
			include_once("db.php");

			mysql_query(" INSERT INTO news (title, text, author /*, date, time*/) VALUES ('$title', '$text',  '$author'/*, '$date', '$time'*/) 
						");

			mysql_close();	
		}
	}
?>

</body>
</html>