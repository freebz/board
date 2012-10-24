<html>
	<body>
		<center>
			<form action="write_ok.php" method="post">
				<h3>게시물 작성</h3>
				<table border=1 cellspacing=0>
					<tr>
						<td>작성자</td>
						<td><input type="text" name="name" size="15"></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td><input type="text" name="email" size="30"></td>
					</tr>
					<tr>
						<td>홈페이지</td>
						<td><input type="text" name="home" size="30"></td>
					</tr>
					<tr>
						<td>제목</td>
						<td><input type="text" name="title" size="50"></td>
					</tr>
					<tr>
						<td>본문</td>
						<td><textarea rows="10" name="content" cols="55"></textarea></td>
					</tr>
					<tr>
						<td>비밀번호</td>
						<td><input type="password" name="pwd" size="8"></td>
					</tr>
				</table>
				<input type="submit" value="게시" />
				<input type="reset" value="취소" />
			</form>
		</center>
	</body>
</html>