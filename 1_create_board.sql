CREATE TABLE board(
	board_idx int NOT NULL auto_increment,
	name varchar(20),
	email varchar(35),
	home varchar(40),
	title varchar(100),
	pwd varchar(20),
	num int,
	writeday int,
	readnum int,
	content text,
	ip varchar(20),
	PRIMARY KEY (board_idx)
);