/* Query to create database*/
create database `user`;

/* Query to create table */
create table `user` (
`email` varchar(200) PRIMARY KEY,
`name` varchar(200),
`password` varchar(200),
`photo_url` varchar(500)
);

/* Query to insert */
INSERT INTO `user` 
(`email`,`name`,`password`,`photo_url`) 
values
('user2@gmail' , 'name2' ,'*****' , ''),
('user3@gmail' , 'name3' ,'*****' , ''),
('user4@gmail' , 'name4' ,'*****' , '');	

/* Query to fetch data from database */
SELECT * FROM `user` where password='*****';

/* Query to delete */
DELETE from `user` where `email` = 'user4@gmail';

/* Query to update data in a database */
UPDATE `user` set `photo_url`='path/to/file.jpg' where email = 'user2@gmail';

/*
Readings from MYSQL:
http://www.w3schools.com/sql/default.asp
http://www.cheat-sheets.org/sites/sql.su/
http://cse.unl.edu/~sscott/ShowFiles/SQL/CheatSheet/SQLCheatSheet.html