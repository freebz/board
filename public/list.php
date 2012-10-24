<?
	include("../dbconn.php");

	$sql = "SELECT * FROM board where ORDER BY num desc";
	$result = mysql_query($sql, $connect);
	$total = mysql_affected_rows();
	
	echo "
		<center>
			<h3>게시판</h3>
				<table cellspacing='0' width='600'>
					<tr>
						<td><a href='write.html'>글 올리기</a></td>
						<td align='right'>게시물수:$total</td>
					</tr>
				</table>
				<table boarder='1' cellspacing='0' width='600'>
					<tr>
						<td align='center' width='10%'>번호</td>
						<td align='center' width='20%'>작성자</td>
						<td align='center' width='20%'>작성일</td>
						<td align='center' width='40%'>제목</td>
						<td align='center' width='10%'>조회수</td>
					</tr>";
	
	for($i=0; $i < $total; $i++) {
		mysql_data_seek($result, $i);
		$row = mysql_fetch_array($result);
		$writeday = date("Y-m-d", $row[writeday]);
		
		echo "
			<tr>
				<td align='center'>$now[num]</td>
				<td><a href='mailto:$row[email]>$row[name]</a></td>
				<td align='center'>$writeday</td>
				<td><a href='content.php?idx=$row[board_idx]>$row[title]</td>
				<td align='center'>$row[readnum]</td>
			</tr>";
	}
	echo "</table><p>";
?>