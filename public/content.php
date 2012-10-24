<?
	include("../dbconn.php");
	
	$updateSQL = "update board set readnum = readnum + 1 where board_idx=$idx";
	$updateResult = mysql_query($updateSQL, $connect);
	
	$sql = "SELECT * FROM board where board_idx = $idx";
	$result = mysql_query($sql, $connect);
	
	$row = mysql_fetch_array($result);
	$writeday = date("Y-m-d H:i:s", $row[writeday]);
	$content = nl2br($row[content]);
	
	echo "
		<html>
			<head>
				<title>webboard</title>
			<head>
			<body>
				<center>
					<h3>그