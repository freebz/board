<?
	if(!$title || !$content || !$name)
	{
		echo("<script>
				window.alert('이름, 제목, 내용을 입력해 주세요!')
				history.go(-1)
			</script>
		"); exit;
	}
	
	if(!$pwd)
	{
		echo("<script>
				window.alert('\\n이 글을 고치거나 지우기 위해서는 \\n반드시 암호가 필요합니다.')
				history.go(-1)
			</script>
		"); exit;
	}
	
	include("../dbconn.php");
	
	$sql = "select max(num) from board";
	$result = mysql_query($sql, $connect);
	
	$row = mysql_fetch_array($result);
	
	if($row[0]) {
		$number = $row[0] + 1;
	}
	else {
		$number = 1;
	}
	
	$writeday = time();
	$sql = "insert into board (name, email, home, title, content,
					pwd, num, writeday, readnum, ip)
					valaues('$name', '$email', '$title', '$content',
					'$pwd', $number, $writeday, 0, '$REMOTE_ADDR')";
	$result = mysql_query($sql, $connect);
	
	if($result)
	{
		Header("Location:list.php");
	}
	else
	{
		echo("<script language='javascript'>
						window.alert('저장중 오류');
						history.go(-1);
					</script");
		exit;
	}
?>