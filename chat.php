<!DOCTYPE html>
<html>
<head>
	<title>チャット</title>
	<style>
	h1{
		font-size:12pt;
		border-bottom: 1px solid gray;
		color:blue;
	}
	</style>
</head>
<body>

<h1>秘密のチャット</h1>
<form action="write.php">
	<input type="text" name="msg">
	<button>送信</button>
</form>

<?php
$fp = fopen("data.txt", "r");
while( ($buff=fgets($fp)) != false ){
	echo $buff;
	echo "<br>";
}
fclose($fp);
?>

</body>
</html>
