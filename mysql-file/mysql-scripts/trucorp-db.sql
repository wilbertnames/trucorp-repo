CREATE TABLE users (
ID INT PRIMARY KEY NOT NULL,
Nama VARCHAR(255) NOT NULL,
Kantor VARCHAR(255) NOT NULL
);

INSERT INTO users (ID, Nama, Kantor)
VALUES  (1,"Wilbert","Pusat"),
	(2,"Wiyanto","Cabang");
