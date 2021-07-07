<?php
function getName() 
{
$characters='abcdefghijklmnopqrstuvwxyz';
$name='';
for($i=0;$i<5;$i++)  $name.=$characters[rand(0,25)];
return $name;
}

$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error) die("Connection failed: ".$connection->connect_error);

$statement="";
for($i=0;$i<10000;$i++)
{
$statement="insert into student (name,age,gender,city_code,course_code) values ";
$name=getName();
$statement.="('{$name}',20,'M',1,1),";
$statement.="('{$name}',21,'M',1,2),";
$statement.="('{$name}',22,'M',1,3),";
$statement.="('{$name}',23,'M',1,4),";
$statement.="('{$name}',24,'M',1,5),";
$statement.="('{$name}',25,'M',1,6),";
$statement.="('{$name}',20,'M',1,7),";
$statement.="('{$name}',21,'M',1,8),";
$statement.="('{$name}',22,'M',1,9),";
$statement.="('{$name}',23,'M',1,10),";

$statement.="('{$name}',20,'M',2,1),";
$statement.="('{$name}',21,'M',2,2),";
$statement.="('{$name}',22,'M',2,3),";
$statement.="('{$name}',23,'M',2,4),";
$statement.="('{$name}',24,'M',2,5),";
$statement.="('{$name}',25,'M',2,6),";
$statement.="('{$name}',20,'M',2,7),";
$statement.="('{$name}',21,'M',2,8),";
$statement.="('{$name}',22,'M',2,9),";
$statement.="('{$name}',23,'M',2,10),";

$statement.="('{$name}',20,'M',3,1),";
$statement.="('{$name}',21,'M',3,2),";
$statement.="('{$name}',22,'M',3,3),";
$statement.="('{$name}',23,'M',3,4),";
$statement.="('{$name}',24,'M',3,5),";
$statement.="('{$name}',25,'M',3,6),";
$statement.="('{$name}',20,'M',3,7),";
$statement.="('{$name}',21,'M',3,8),";
$statement.="('{$name}',22,'M',3,9),";
$statement.="('{$name}',23,'M',3,10),";

$statement.="('{$name}',20,'M',4,1),";
$statement.="('{$name}',21,'M',4,2),";
$statement.="('{$name}',22,'M',4,3),";
$statement.="('{$name}',23,'M',4,4),";
$statement.="('{$name}',24,'M',4,5),";
$statement.="('{$name}',25,'M',4,6),";
$statement.="('{$name}',20,'M',4,7),";
$statement.="('{$name}',21,'M',4,8),";
$statement.="('{$name}',22,'M',4,9),";
$statement.="('{$name}',23,'M',4,10),";

$statement.="('{$name}',20,'M',5,1),";
$statement.="('{$name}',21,'M',5,2),";
$statement.="('{$name}',22,'M',5,3),";
$statement.="('{$name}',23,'M',5,4),";
$statement.="('{$name}',24,'M',5,5),";
$statement.="('{$name}',25,'M',5,6),";
$statement.="('{$name}',20,'M',5,7),";
$statement.="('{$name}',21,'M',5,8),";
$statement.="('{$name}',22,'M',5,9),";
$statement.="('{$name}',23,'M',5,10),";

$statement.="('{$name}',20,'M',6,1),";
$statement.="('{$name}',21,'M',6,2),";
$statement.="('{$name}',22,'M',6,3),";
$statement.="('{$name}',23,'M',6,4),";
$statement.="('{$name}',24,'M',6,5),";
$statement.="('{$name}',25,'M',6,6),";
$statement.="('{$name}',20,'M',6,7),";
$statement.="('{$name}',21,'M',6,8),";
$statement.="('{$name}',22,'M',6,9),";
$statement.="('{$name}',23,'M',6,10),";

$statement.="('{$name}',20,'M',7,1),";
$statement.="('{$name}',21,'M',7,2),";
$statement.="('{$name}',22,'M',7,3),";
$statement.="('{$name}',23,'M',7,4),";
$statement.="('{$name}',24,'M',7,5),";
$statement.="('{$name}',25,'M',7,6),";
$statement.="('{$name}',20,'M',7,7),";
$statement.="('{$name}',21,'M',7,8),";
$statement.="('{$name}',22,'M',7,9),";
$statement.="('{$name}',23,'M',7,10),";

$statement.="('{$name}',20,'M',8,1),";
$statement.="('{$name}',21,'M',8,2),";
$statement.="('{$name}',22,'M',8,3),";
$statement.="('{$name}',23,'M',8,4),";
$statement.="('{$name}',24,'M',8,5),";
$statement.="('{$name}',25,'M',8,6),";
$statement.="('{$name}',20,'M',8,7),";
$statement.="('{$name}',21,'M',8,8),";
$statement.="('{$name}',22,'M',8,9),";
$statement.="('{$name}',23,'M',8,10),";

$statement.="('{$name}',20,'M',9,1),";
$statement.="('{$name}',21,'M',9,2),";
$statement.="('{$name}',22,'M',9,3),";
$statement.="('{$name}',23,'M',9,4),";
$statement.="('{$name}',24,'M',9,5),";
$statement.="('{$name}',25,'M',9,6),";
$statement.="('{$name}',20,'M',9,7),";
$statement.="('{$name}',21,'M',9,8),";
$statement.="('{$name}',22,'M',9,9),";
$statement.="('{$name}',23,'M',9,10),";

$statement.="('{$name}',20,'M',10,1),";
$statement.="('{$name}',21,'M',10,2),";
$statement.="('{$name}',22,'M',10,3),";
$statement.="('{$name}',23,'M',10,4),";
$statement.="('{$name}',24,'M',10,5),";
$statement.="('{$name}',25,'M',10,6),";
$statement.="('{$name}',20,'M',10,7),";
$statement.="('{$name}',21,'M',10,8),";
$statement.="('{$name}',22,'M',10,9),";
$statement.="('{$name}',23,'M',10,10),";

$statement.="('{$name}',20,'F',1,1),";
$statement.="('{$name}',21,'F',1,2),";
$statement.="('{$name}',22,'F',1,3),";
$statement.="('{$name}',23,'F',1,4),";
$statement.="('{$name}',24,'F',1,5),";
$statement.="('{$name}',25,'F',1,6),";
$statement.="('{$name}',20,'F',1,7),";
$statement.="('{$name}',21,'F',1,8),";
$statement.="('{$name}',22,'F',1,9),";
$statement.="('{$name}',23,'F',1,10),";

$statement.="('{$name}',20,'F',2,1),";
$statement.="('{$name}',21,'F',2,2),";
$statement.="('{$name}',22,'F',2,3),";
$statement.="('{$name}',23,'F',2,4),";
$statement.="('{$name}',24,'F',2,5),";
$statement.="('{$name}',25,'F',2,6),";
$statement.="('{$name}',20,'F',2,7),";
$statement.="('{$name}',21,'F',2,8),";
$statement.="('{$name}',22,'F',2,9),";
$statement.="('{$name}',23,'F',2,10),";

$statement.="('{$name}',20,'F',3,1),";
$statement.="('{$name}',21,'F',3,2),";
$statement.="('{$name}',22,'F',3,3),";
$statement.="('{$name}',23,'F',3,4),";
$statement.="('{$name}',24,'F',3,5),";
$statement.="('{$name}',25,'F',3,6),";
$statement.="('{$name}',20,'F',3,7),";
$statement.="('{$name}',21,'F',3,8),";
$statement.="('{$name}',22,'F',3,9),";
$statement.="('{$name}',23,'F',3,10),";

$statement.="('{$name}',20,'F',4,1),";
$statement.="('{$name}',21,'F',4,2),";
$statement.="('{$name}',22,'F',4,3),";
$statement.="('{$name}',23,'F',4,4),";
$statement.="('{$name}',24,'F',4,5),";
$statement.="('{$name}',25,'F',4,6),";
$statement.="('{$name}',20,'F',4,7),";
$statement.="('{$name}',21,'F',4,8),";
$statement.="('{$name}',22,'F',4,9),";
$statement.="('{$name}',23,'F',4,10),";

$statement.="('{$name}',20,'F',5,1),";
$statement.="('{$name}',21,'F',5,2),";
$statement.="('{$name}',22,'F',5,3),";
$statement.="('{$name}',23,'F',5,4),";
$statement.="('{$name}',24,'F',5,5),";
$statement.="('{$name}',25,'F',5,6),";
$statement.="('{$name}',20,'F',5,7),";
$statement.="('{$name}',21,'F',5,8),";
$statement.="('{$name}',22,'F',5,9),";
$statement.="('{$name}',23,'F',5,10),";

$statement.="('{$name}',20,'F',6,1),";
$statement.="('{$name}',21,'F',6,2),";
$statement.="('{$name}',22,'F',6,3),";
$statement.="('{$name}',23,'F',6,4),";
$statement.="('{$name}',24,'F',6,5),";
$statement.="('{$name}',25,'F',6,6),";
$statement.="('{$name}',20,'F',6,7),";
$statement.="('{$name}',21,'F',6,8),";
$statement.="('{$name}',22,'F',6,9),";
$statement.="('{$name}',23,'F',6,10),";

$statement.="('{$name}',20,'F',7,1),";
$statement.="('{$name}',21,'F',7,2),";
$statement.="('{$name}',22,'F',7,3),";
$statement.="('{$name}',23,'F',7,4),";
$statement.="('{$name}',24,'F',7,5),";
$statement.="('{$name}',25,'F',7,6),";
$statement.="('{$name}',20,'F',7,7),";
$statement.="('{$name}',21,'F',7,8),";
$statement.="('{$name}',22,'F',7,9),";
$statement.="('{$name}',23,'F',7,10),";

$statement.="('{$name}',20,'F',8,1),";
$statement.="('{$name}',21,'F',8,2),";
$statement.="('{$name}',22,'F',8,3),";
$statement.="('{$name}',23,'F',8,4),";
$statement.="('{$name}',24,'F',8,5),";
$statement.="('{$name}',25,'F',8,6),";
$statement.="('{$name}',20,'F',8,7),";
$statement.="('{$name}',21,'F',8,8),";
$statement.="('{$name}',22,'F',8,9),";
$statement.="('{$name}',23,'F',8,10),";

$statement.="('{$name}',20,'F',9,1),";
$statement.="('{$name}',21,'F',9,2),";
$statement.="('{$name}',22,'F',9,3),";
$statement.="('{$name}',23,'F',9,4),";
$statement.="('{$name}',24,'F',9,5),";
$statement.="('{$name}',25,'F',9,6),";
$statement.="('{$name}',20,'F',9,7),";
$statement.="('{$name}',21,'F',9,8),";
$statement.="('{$name}',22,'F',9,9),";
$statement.="('{$name}',23,'F',9,10),";

$statement.="('{$name}',20,'F',10,1),";
$statement.="('{$name}',21,'F',10,2),";
$statement.="('{$name}',22,'F',10,3),";
$statement.="('{$name}',23,'F',10,4),";
$statement.="('{$name}',24,'F',10,5),";
$statement.="('{$name}',25,'F',10,6),";
$statement.="('{$name}',20,'F',10,7),";
$statement.="('{$name}',21,'F',10,8),";
$statement.="('{$name}',22,'F',10,9),";
$statement.="('{$name}',23,'F',10,10),";

$statement.="('{$name}',20,'M',1,1),";
$statement.="('{$name}',21,'M',1,2),";
$statement.="('{$name}',22,'M',1,3),";
$statement.="('{$name}',23,'M',1,4),";
$statement.="('{$name}',24,'M',1,5),";
$statement.="('{$name}',25,'M',1,6),";
$statement.="('{$name}',20,'M',1,7),";
$statement.="('{$name}',21,'M',1,8),";
$statement.="('{$name}',22,'M',1,9),";
$statement.="('{$name}',23,'M',1,10),";

$statement.="('{$name}',20,'M',2,1),";
$statement.="('{$name}',21,'M',2,2),";
$statement.="('{$name}',22,'M',2,3),";
$statement.="('{$name}',23,'M',2,4),";
$statement.="('{$name}',24,'M',2,5),";
$statement.="('{$name}',25,'M',2,6),";
$statement.="('{$name}',20,'M',2,7),";
$statement.="('{$name}',21,'M',2,8),";
$statement.="('{$name}',22,'M',2,9),";
$statement.="('{$name}',23,'M',2,10),";

$statement.="('{$name}',20,'M',3,1),";
$statement.="('{$name}',21,'M',3,2),";
$statement.="('{$name}',22,'M',3,3),";
$statement.="('{$name}',23,'M',3,4),";
$statement.="('{$name}',24,'M',3,5),";
$statement.="('{$name}',25,'M',3,6),";
$statement.="('{$name}',20,'M',3,7),";
$statement.="('{$name}',21,'M',3,8),";
$statement.="('{$name}',22,'M',3,9),";
$statement.="('{$name}',23,'M',3,10),";

$statement.="('{$name}',20,'M',4,1),";
$statement.="('{$name}',21,'M',4,2),";
$statement.="('{$name}',22,'M',4,3),";
$statement.="('{$name}',23,'M',4,4),";
$statement.="('{$name}',24,'M',4,5),";
$statement.="('{$name}',25,'M',4,6),";
$statement.="('{$name}',20,'M',4,7),";
$statement.="('{$name}',21,'M',4,8),";
$statement.="('{$name}',22,'M',4,9),";
$statement.="('{$name}',23,'M',4,10),";

$statement.="('{$name}',20,'M',5,1),";
$statement.="('{$name}',21,'M',5,2),";
$statement.="('{$name}',22,'M',5,3),";
$statement.="('{$name}',23,'M',5,4),";
$statement.="('{$name}',24,'M',5,5),";
$statement.="('{$name}',25,'M',5,6),";
$statement.="('{$name}',20,'M',5,7),";
$statement.="('{$name}',21,'M',5,8),";
$statement.="('{$name}',22,'M',5,9),";
$statement.="('{$name}',23,'M',5,10),";

$statement.="('{$name}',20,'M',6,1),";
$statement.="('{$name}',21,'M',6,2),";
$statement.="('{$name}',22,'M',6,3),";
$statement.="('{$name}',23,'M',6,4),";
$statement.="('{$name}',24,'M',6,5),";
$statement.="('{$name}',25,'M',6,6),";
$statement.="('{$name}',20,'M',6,7),";
$statement.="('{$name}',21,'M',6,8),";
$statement.="('{$name}',22,'M',6,9),";
$statement.="('{$name}',23,'M',6,10),";

$statement.="('{$name}',20,'M',7,1),";
$statement.="('{$name}',21,'M',7,2),";
$statement.="('{$name}',22,'M',7,3),";
$statement.="('{$name}',23,'M',7,4),";
$statement.="('{$name}',24,'M',7,5),";
$statement.="('{$name}',25,'M',7,6),";
$statement.="('{$name}',20,'M',7,7),";
$statement.="('{$name}',21,'M',7,8),";
$statement.="('{$name}',22,'M',7,9),";
$statement.="('{$name}',23,'M',7,10),";

$statement.="('{$name}',20,'M',8,1),";
$statement.="('{$name}',21,'M',8,2),";
$statement.="('{$name}',22,'M',8,3),";
$statement.="('{$name}',23,'M',8,4),";
$statement.="('{$name}',24,'M',8,5),";
$statement.="('{$name}',25,'M',8,6),";
$statement.="('{$name}',20,'M',8,7),";
$statement.="('{$name}',21,'M',8,8),";
$statement.="('{$name}',22,'M',8,9),";
$statement.="('{$name}',23,'M',8,10),";

$statement.="('{$name}',20,'M',9,1),";
$statement.="('{$name}',21,'M',9,2),";
$statement.="('{$name}',22,'M',9,3),";
$statement.="('{$name}',23,'M',9,4),";
$statement.="('{$name}',24,'M',9,5),";
$statement.="('{$name}',25,'M',9,6),";
$statement.="('{$name}',20,'M',9,7),";
$statement.="('{$name}',21,'M',9,8),";
$statement.="('{$name}',22,'M',9,9),";
$statement.="('{$name}',23,'M',9,10),";

$statement.="('{$name}',20,'M',10,1),";
$statement.="('{$name}',21,'M',10,2),";
$statement.="('{$name}',22,'M',10,3),";
$statement.="('{$name}',23,'M',10,4),";
$statement.="('{$name}',24,'M',10,5),";
$statement.="('{$name}',25,'M',10,6),";
$statement.="('{$name}',20,'M',10,7),";
$statement.="('{$name}',21,'M',10,8),";
$statement.="('{$name}',22,'M',10,9),";
$statement.="('{$name}',23,'M',10,10),";

$statement.="('{$name}',20,'F',1,1),";
$statement.="('{$name}',21,'F',1,2),";
$statement.="('{$name}',22,'F',1,3),";
$statement.="('{$name}',23,'F',1,4),";
$statement.="('{$name}',24,'F',1,5),";
$statement.="('{$name}',25,'F',1,6),";
$statement.="('{$name}',20,'F',1,7),";
$statement.="('{$name}',21,'F',1,8),";
$statement.="('{$name}',22,'F',1,9),";
$statement.="('{$name}',23,'F',1,10),";

$statement.="('{$name}',20,'F',2,1),";
$statement.="('{$name}',21,'F',2,2),";
$statement.="('{$name}',22,'F',2,3),";
$statement.="('{$name}',23,'F',2,4),";
$statement.="('{$name}',24,'F',2,5),";
$statement.="('{$name}',25,'F',2,6),";
$statement.="('{$name}',20,'F',2,7),";
$statement.="('{$name}',21,'F',2,8),";
$statement.="('{$name}',22,'F',2,9),";
$statement.="('{$name}',23,'F',2,10),";

$statement.="('{$name}',20,'F',3,1),";
$statement.="('{$name}',21,'F',3,2),";
$statement.="('{$name}',22,'F',3,3),";
$statement.="('{$name}',23,'F',3,4),";
$statement.="('{$name}',24,'F',3,5),";
$statement.="('{$name}',25,'F',3,6),";
$statement.="('{$name}',20,'F',3,7),";
$statement.="('{$name}',21,'F',3,8),";
$statement.="('{$name}',22,'F',3,9),";
$statement.="('{$name}',23,'F',3,10),";

$statement.="('{$name}',20,'F',4,1),";
$statement.="('{$name}',21,'F',4,2),";
$statement.="('{$name}',22,'F',4,3),";
$statement.="('{$name}',23,'F',4,4),";
$statement.="('{$name}',24,'F',4,5),";
$statement.="('{$name}',25,'F',4,6),";
$statement.="('{$name}',20,'F',4,7),";
$statement.="('{$name}',21,'F',4,8),";
$statement.="('{$name}',22,'F',4,9),";
$statement.="('{$name}',23,'F',4,10),";

$statement.="('{$name}',20,'F',5,1),";
$statement.="('{$name}',21,'F',5,2),";
$statement.="('{$name}',22,'F',5,3),";
$statement.="('{$name}',23,'F',5,4),";
$statement.="('{$name}',24,'F',5,5),";
$statement.="('{$name}',25,'F',5,6),";
$statement.="('{$name}',20,'F',5,7),";
$statement.="('{$name}',21,'F',5,8),";
$statement.="('{$name}',22,'F',5,9),";
$statement.="('{$name}',23,'F',5,10),";

$statement.="('{$name}',20,'F',6,1),";
$statement.="('{$name}',21,'F',6,2),";
$statement.="('{$name}',22,'F',6,3),";
$statement.="('{$name}',23,'F',6,4),";
$statement.="('{$name}',24,'F',6,5),";
$statement.="('{$name}',25,'F',6,6),";
$statement.="('{$name}',20,'F',6,7),";
$statement.="('{$name}',21,'F',6,8),";
$statement.="('{$name}',22,'F',6,9),";
$statement.="('{$name}',23,'F',6,10),";

$statement.="('{$name}',20,'F',7,1),";
$statement.="('{$name}',21,'F',7,2),";
$statement.="('{$name}',22,'F',7,3),";
$statement.="('{$name}',23,'F',7,4),";
$statement.="('{$name}',24,'F',7,5),";
$statement.="('{$name}',25,'F',7,6),";
$statement.="('{$name}',20,'F',7,7),";
$statement.="('{$name}',21,'F',7,8),";
$statement.="('{$name}',22,'F',7,9),";
$statement.="('{$name}',23,'F',7,10),";

$statement.="('{$name}',20,'F',8,1),";
$statement.="('{$name}',21,'F',8,2),";
$statement.="('{$name}',22,'F',8,3),";
$statement.="('{$name}',23,'F',8,4),";
$statement.="('{$name}',24,'F',8,5),";
$statement.="('{$name}',25,'F',8,6),";
$statement.="('{$name}',20,'F',8,7),";
$statement.="('{$name}',21,'F',8,8),";
$statement.="('{$name}',22,'F',8,9),";
$statement.="('{$name}',23,'F',8,10),";

$statement.="('{$name}',20,'F',9,1),";
$statement.="('{$name}',21,'F',9,2),";
$statement.="('{$name}',22,'F',9,3),";
$statement.="('{$name}',23,'F',9,4),";
$statement.="('{$name}',24,'F',9,5),";
$statement.="('{$name}',25,'F',9,6),";
$statement.="('{$name}',20,'F',9,7),";
$statement.="('{$name}',21,'F',9,8),";
$statement.="('{$name}',22,'F',9,9),";
$statement.="('{$name}',23,'F',9,10),";

$statement.="('{$name}',20,'F',10,1),";
$statement.="('{$name}',21,'F',10,2),";
$statement.="('{$name}',22,'F',10,3),";
$statement.="('{$name}',23,'F',10,4),";
$statement.="('{$name}',24,'F',10,5),";
$statement.="('{$name}',25,'F',10,6),";
$statement.="('{$name}',20,'F',10,7),";
$statement.="('{$name}',21,'F',10,8),";
$statement.="('{$name}',22,'F',10,9),";
$statement.="('{$name}',23,'F',10,10),";



//

$statement.="('{$name}',25,'M',1,1),";
$statement.="('{$name}',24,'M',1,2),";
$statement.="('{$name}',23,'M',1,3),";
$statement.="('{$name}',22,'M',1,4),";
$statement.="('{$name}',21,'M',1,5),";
$statement.="('{$name}',20,'M',1,6),";
$statement.="('{$name}',21,'M',1,7),";
$statement.="('{$name}',22,'M',1,8),";
$statement.="('{$name}',23,'M',1,9),";
$statement.="('{$name}',24,'M',1,10),";

$statement.="('{$name}',25,'M',2,1),";
$statement.="('{$name}',24,'M',2,2),";
$statement.="('{$name}',23,'M',2,3),";
$statement.="('{$name}',22,'M',2,4),";
$statement.="('{$name}',21,'M',2,5),";
$statement.="('{$name}',21,'M',2,6),";
$statement.="('{$name}',22,'M',2,7),";
$statement.="('{$name}',23,'M',2,8),";
$statement.="('{$name}',24,'M',2,9),";
$statement.="('{$name}',25,'M',2,10),";

$statement.="('{$name}',25,'M',3,1),";
$statement.="('{$name}',24,'M',3,2),";
$statement.="('{$name}',23,'M',3,3),";
$statement.="('{$name}',22,'M',3,4),";
$statement.="('{$name}',21,'M',3,5),";
$statement.="('{$name}',21,'M',3,6),";
$statement.="('{$name}',22,'M',3,7),";
$statement.="('{$name}',23,'M',3,8),";
$statement.="('{$name}',24,'M',3,9),";
$statement.="('{$name}',25,'M',3,10),";

$statement.="('{$name}',25,'M',4,1),";
$statement.="('{$name}',24,'M',4,2),";
$statement.="('{$name}',23,'M',4,3),";
$statement.="('{$name}',22,'M',4,4),";
$statement.="('{$name}',21,'M',4,5),";
$statement.="('{$name}',21,'M',4,6),";
$statement.="('{$name}',22,'M',4,7),";
$statement.="('{$name}',23,'M',4,8),";
$statement.="('{$name}',24,'M',4,9),";
$statement.="('{$name}',25,'M',4,10),";

$statement.="('{$name}',25,'M',5,1),";
$statement.="('{$name}',24,'M',5,2),";
$statement.="('{$name}',23,'M',5,3),";
$statement.="('{$name}',22,'M',5,4),";
$statement.="('{$name}',21,'M',5,5),";
$statement.="('{$name}',21,'M',5,6),";
$statement.="('{$name}',22,'M',5,7),";
$statement.="('{$name}',23,'M',5,8),";
$statement.="('{$name}',24,'M',5,9),";
$statement.="('{$name}',25,'M',5,10),";

$statement.="('{$name}',20,'M',6,1),";
$statement.="('{$name}',21,'M',6,2),";
$statement.="('{$name}',22,'M',6,3),";
$statement.="('{$name}',23,'M',6,4),";
$statement.="('{$name}',24,'M',6,5),";
$statement.="('{$name}',25,'M',6,6),";
$statement.="('{$name}',20,'M',6,7),";
$statement.="('{$name}',21,'M',6,8),";
$statement.="('{$name}',22,'M',6,9),";
$statement.="('{$name}',23,'M',6,10),";

$statement.="('{$name}',20,'M',7,1),";
$statement.="('{$name}',21,'M',7,2),";
$statement.="('{$name}',22,'M',7,3),";
$statement.="('{$name}',23,'M',7,4),";
$statement.="('{$name}',24,'M',7,5),";
$statement.="('{$name}',25,'M',7,6),";
$statement.="('{$name}',20,'M',7,7),";
$statement.="('{$name}',21,'M',7,8),";
$statement.="('{$name}',22,'M',7,9),";
$statement.="('{$name}',23,'M',7,10),";

$statement.="('{$name}',20,'M',8,1),";
$statement.="('{$name}',21,'M',8,2),";
$statement.="('{$name}',22,'M',8,3),";
$statement.="('{$name}',23,'M',8,4),";
$statement.="('{$name}',24,'M',8,5),";
$statement.="('{$name}',25,'M',8,6),";
$statement.="('{$name}',20,'M',8,7),";
$statement.="('{$name}',21,'M',8,8),";
$statement.="('{$name}',22,'M',8,9),";
$statement.="('{$name}',23,'M',8,10),";

$statement.="('{$name}',20,'M',9,1),";
$statement.="('{$name}',21,'M',9,2),";
$statement.="('{$name}',22,'M',9,3),";
$statement.="('{$name}',23,'M',9,4),";
$statement.="('{$name}',24,'M',9,5),";
$statement.="('{$name}',25,'M',9,6),";
$statement.="('{$name}',20,'M',9,7),";
$statement.="('{$name}',21,'M',9,8),";
$statement.="('{$name}',22,'M',9,9),";
$statement.="('{$name}',23,'M',9,10),";

$statement.="('{$name}',20,'M',10,1),";
$statement.="('{$name}',21,'M',10,2),";
$statement.="('{$name}',22,'M',10,3),";
$statement.="('{$name}',23,'M',10,4),";
$statement.="('{$name}',24,'M',10,5),";
$statement.="('{$name}',25,'M',10,6),";
$statement.="('{$name}',20,'M',10,7),";
$statement.="('{$name}',21,'M',10,8),";
$statement.="('{$name}',22,'M',10,9),";
$statement.="('{$name}',23,'M',10,10),";

$statement.="('{$name}',20,'F',1,1),";
$statement.="('{$name}',21,'F',1,2),";
$statement.="('{$name}',22,'F',1,3),";
$statement.="('{$name}',23,'F',1,4),";
$statement.="('{$name}',24,'F',1,5),";
$statement.="('{$name}',25,'F',1,6),";
$statement.="('{$name}',20,'F',1,7),";
$statement.="('{$name}',21,'F',1,8),";
$statement.="('{$name}',22,'F',1,9),";
$statement.="('{$name}',23,'F',1,10),";

$statement.="('{$name}',20,'F',2,1),";
$statement.="('{$name}',21,'F',2,2),";
$statement.="('{$name}',22,'F',2,3),";
$statement.="('{$name}',23,'F',2,4),";
$statement.="('{$name}',24,'F',2,5),";
$statement.="('{$name}',25,'F',2,6),";
$statement.="('{$name}',20,'F',2,7),";
$statement.="('{$name}',21,'F',2,8),";
$statement.="('{$name}',22,'F',2,9),";
$statement.="('{$name}',23,'F',2,10),";

$statement.="('{$name}',20,'F',3,1),";
$statement.="('{$name}',21,'F',3,2),";
$statement.="('{$name}',22,'F',3,3),";
$statement.="('{$name}',23,'F',3,4),";
$statement.="('{$name}',24,'F',3,5),";
$statement.="('{$name}',25,'F',3,6),";
$statement.="('{$name}',20,'F',3,7),";
$statement.="('{$name}',21,'F',3,8),";
$statement.="('{$name}',22,'F',3,9),";
$statement.="('{$name}',23,'F',3,10),";

$statement.="('{$name}',20,'F',4,1),";
$statement.="('{$name}',21,'F',4,2),";
$statement.="('{$name}',22,'F',4,3),";
$statement.="('{$name}',23,'F',4,4),";
$statement.="('{$name}',24,'F',4,5),";
$statement.="('{$name}',25,'F',4,6),";
$statement.="('{$name}',20,'F',4,7),";
$statement.="('{$name}',21,'F',4,8),";
$statement.="('{$name}',22,'F',4,9),";
$statement.="('{$name}',23,'F',4,10),";

$statement.="('{$name}',20,'F',5,1),";
$statement.="('{$name}',21,'F',5,2),";
$statement.="('{$name}',22,'F',5,3),";
$statement.="('{$name}',23,'F',5,4),";
$statement.="('{$name}',24,'F',5,5),";
$statement.="('{$name}',25,'F',5,6),";
$statement.="('{$name}',20,'F',5,7),";
$statement.="('{$name}',21,'F',5,8),";
$statement.="('{$name}',22,'F',5,9),";
$statement.="('{$name}',23,'F',5,10),";

$statement.="('{$name}',20,'F',6,1),";
$statement.="('{$name}',21,'F',6,2),";
$statement.="('{$name}',22,'F',6,3),";
$statement.="('{$name}',23,'F',6,4),";
$statement.="('{$name}',24,'F',6,5),";
$statement.="('{$name}',25,'F',6,6),";
$statement.="('{$name}',20,'F',6,7),";
$statement.="('{$name}',21,'F',6,8),";
$statement.="('{$name}',22,'F',6,9),";
$statement.="('{$name}',23,'F',6,10),";

$statement.="('{$name}',20,'F',7,1),";
$statement.="('{$name}',21,'F',7,2),";
$statement.="('{$name}',22,'F',7,3),";
$statement.="('{$name}',23,'F',7,4),";
$statement.="('{$name}',24,'F',7,5),";
$statement.="('{$name}',25,'F',7,6),";
$statement.="('{$name}',20,'F',7,7),";
$statement.="('{$name}',21,'F',7,8),";
$statement.="('{$name}',22,'F',7,9),";
$statement.="('{$name}',23,'F',7,10),";

$statement.="('{$name}',20,'F',8,1),";
$statement.="('{$name}',21,'F',8,2),";
$statement.="('{$name}',22,'F',8,3),";
$statement.="('{$name}',23,'F',8,4),";
$statement.="('{$name}',24,'F',8,5),";
$statement.="('{$name}',25,'F',8,6),";
$statement.="('{$name}',20,'F',8,7),";
$statement.="('{$name}',21,'F',8,8),";
$statement.="('{$name}',22,'F',8,9),";
$statement.="('{$name}',23,'F',8,10),";

$statement.="('{$name}',20,'F',9,1),";
$statement.="('{$name}',21,'F',9,2),";
$statement.="('{$name}',22,'F',9,3),";
$statement.="('{$name}',23,'F',9,4),";
$statement.="('{$name}',24,'F',9,5),";
$statement.="('{$name}',25,'F',9,6),";
$statement.="('{$name}',20,'F',9,7),";
$statement.="('{$name}',21,'F',9,8),";
$statement.="('{$name}',22,'F',9,9),";
$statement.="('{$name}',23,'F',9,10),";

$statement.="('{$name}',20,'F',10,1),";
$statement.="('{$name}',21,'F',10,2),";
$statement.="('{$name}',22,'F',10,3),";
$statement.="('{$name}',23,'F',10,4),";
$statement.="('{$name}',24,'F',10,5),";
$statement.="('{$name}',25,'F',10,6),";
$statement.="('{$name}',20,'F',10,7),";
$statement.="('{$name}',21,'F',10,8),";
$statement.="('{$name}',22,'F',10,9),";
$statement.="('{$name}',23,'F',10,10),";
//

//
$statement.="('{$name}',25,'M',1,1),";
$statement.="('{$name}',24,'M',1,2),";
$statement.="('{$name}',23,'M',1,3),";
$statement.="('{$name}',22,'M',1,4),";
$statement.="('{$name}',21,'M',1,5),";
$statement.="('{$name}',20,'M',1,6),";
$statement.="('{$name}',21,'M',1,7),";
$statement.="('{$name}',22,'M',1,8),";
$statement.="('{$name}',23,'M',1,9),";
$statement.="('{$name}',24,'M',1,10),";

$statement.="('{$name}',25,'M',2,1),";
$statement.="('{$name}',24,'M',2,2),";
$statement.="('{$name}',23,'M',2,3),";
$statement.="('{$name}',22,'M',2,4),";
$statement.="('{$name}',21,'M',2,5),";
$statement.="('{$name}',21,'M',2,6),";
$statement.="('{$name}',22,'M',2,7),";
$statement.="('{$name}',23,'M',2,8),";
$statement.="('{$name}',24,'M',2,9),";
$statement.="('{$name}',25,'M',2,10),";

$statement.="('{$name}',25,'M',3,1),";
$statement.="('{$name}',24,'M',3,2),";
$statement.="('{$name}',23,'M',3,3),";
$statement.="('{$name}',22,'M',3,4),";
$statement.="('{$name}',21,'M',3,5),";
$statement.="('{$name}',21,'M',3,6),";
$statement.="('{$name}',22,'M',3,7),";
$statement.="('{$name}',23,'M',3,8),";
$statement.="('{$name}',24,'M',3,9),";
$statement.="('{$name}',25,'M',3,10),";

$statement.="('{$name}',25,'M',4,1),";
$statement.="('{$name}',24,'M',4,2),";
$statement.="('{$name}',23,'M',4,3),";
$statement.="('{$name}',22,'M',4,4),";
$statement.="('{$name}',21,'M',4,5),";
$statement.="('{$name}',21,'M',4,6),";
$statement.="('{$name}',22,'M',4,7),";
$statement.="('{$name}',23,'M',4,8),";
$statement.="('{$name}',24,'M',4,9),";
$statement.="('{$name}',25,'M',4,10),";

$statement.="('{$name}',25,'M',5,1),";
$statement.="('{$name}',24,'M',5,2),";
$statement.="('{$name}',23,'M',5,3),";
$statement.="('{$name}',22,'M',5,4),";
$statement.="('{$name}',21,'M',5,5),";
$statement.="('{$name}',21,'M',5,6),";
$statement.="('{$name}',22,'M',5,7),";
$statement.="('{$name}',23,'M',5,8),";
$statement.="('{$name}',24,'M',5,9),";
$statement.="('{$name}',25,'M',5,10),";

$statement.="('{$name}',20,'M',6,1),";
$statement.="('{$name}',21,'M',6,2),";
$statement.="('{$name}',22,'M',6,3),";
$statement.="('{$name}',23,'M',6,4),";
$statement.="('{$name}',24,'M',6,5),";
$statement.="('{$name}',25,'M',6,6),";
$statement.="('{$name}',20,'M',6,7),";
$statement.="('{$name}',21,'M',6,8),";
$statement.="('{$name}',22,'M',6,9),";
$statement.="('{$name}',23,'M',6,10),";

$statement.="('{$name}',20,'M',7,1),";
$statement.="('{$name}',21,'M',7,2),";
$statement.="('{$name}',22,'M',7,3),";
$statement.="('{$name}',23,'M',7,4),";
$statement.="('{$name}',24,'M',7,5),";
$statement.="('{$name}',25,'M',7,6),";
$statement.="('{$name}',20,'M',7,7),";
$statement.="('{$name}',21,'M',7,8),";
$statement.="('{$name}',22,'M',7,9),";
$statement.="('{$name}',23,'M',7,10),";

$statement.="('{$name}',20,'M',8,1),";
$statement.="('{$name}',21,'M',8,2),";
$statement.="('{$name}',22,'M',8,3),";
$statement.="('{$name}',23,'M',8,4),";
$statement.="('{$name}',24,'M',8,5),";
$statement.="('{$name}',25,'M',8,6),";
$statement.="('{$name}',20,'M',8,7),";
$statement.="('{$name}',21,'M',8,8),";
$statement.="('{$name}',22,'M',8,9),";
$statement.="('{$name}',23,'M',8,10),";

$statement.="('{$name}',20,'M',9,1),";
$statement.="('{$name}',21,'M',9,2),";
$statement.="('{$name}',22,'M',9,3),";
$statement.="('{$name}',23,'M',9,4),";
$statement.="('{$name}',24,'M',9,5),";
$statement.="('{$name}',25,'M',9,6),";
$statement.="('{$name}',20,'M',9,7),";
$statement.="('{$name}',21,'M',9,8),";
$statement.="('{$name}',22,'M',9,9),";
$statement.="('{$name}',23,'M',9,10),";

$statement.="('{$name}',20,'M',10,1),";
$statement.="('{$name}',21,'M',10,2),";
$statement.="('{$name}',22,'M',10,3),";
$statement.="('{$name}',23,'M',10,4),";
$statement.="('{$name}',24,'M',10,5),";
$statement.="('{$name}',25,'M',10,6),";
$statement.="('{$name}',20,'M',10,7),";
$statement.="('{$name}',21,'M',10,8),";
$statement.="('{$name}',22,'M',10,9),";
$statement.="('{$name}',23,'M',10,10),";

$statement.="('{$name}',20,'F',1,1),";
$statement.="('{$name}',21,'F',1,2),";
$statement.="('{$name}',22,'F',1,3),";
$statement.="('{$name}',23,'F',1,4),";
$statement.="('{$name}',24,'F',1,5),";
$statement.="('{$name}',25,'F',1,6),";
$statement.="('{$name}',20,'F',1,7),";
$statement.="('{$name}',21,'F',1,8),";
$statement.="('{$name}',22,'F',1,9),";
$statement.="('{$name}',23,'F',1,10),";

$statement.="('{$name}',20,'F',2,1),";
$statement.="('{$name}',21,'F',2,2),";
$statement.="('{$name}',22,'F',2,3),";
$statement.="('{$name}',23,'F',2,4),";
$statement.="('{$name}',24,'F',2,5),";
$statement.="('{$name}',25,'F',2,6),";
$statement.="('{$name}',20,'F',2,7),";
$statement.="('{$name}',21,'F',2,8),";
$statement.="('{$name}',22,'F',2,9),";
$statement.="('{$name}',23,'F',2,10),";

$statement.="('{$name}',20,'F',3,1),";
$statement.="('{$name}',21,'F',3,2),";
$statement.="('{$name}',22,'F',3,3),";
$statement.="('{$name}',23,'F',3,4),";
$statement.="('{$name}',24,'F',3,5),";
$statement.="('{$name}',25,'F',3,6),";
$statement.="('{$name}',20,'F',3,7),";
$statement.="('{$name}',21,'F',3,8),";
$statement.="('{$name}',22,'F',3,9),";
$statement.="('{$name}',23,'F',3,10),";

$statement.="('{$name}',20,'F',4,1),";
$statement.="('{$name}',21,'F',4,2),";
$statement.="('{$name}',22,'F',4,3),";
$statement.="('{$name}',23,'F',4,4),";
$statement.="('{$name}',24,'F',4,5),";
$statement.="('{$name}',25,'F',4,6),";
$statement.="('{$name}',20,'F',4,7),";
$statement.="('{$name}',21,'F',4,8),";
$statement.="('{$name}',22,'F',4,9),";
$statement.="('{$name}',23,'F',4,10),";

$statement.="('{$name}',20,'F',5,1),";
$statement.="('{$name}',21,'F',5,2),";
$statement.="('{$name}',22,'F',5,3),";
$statement.="('{$name}',23,'F',5,4),";
$statement.="('{$name}',24,'F',5,5),";
$statement.="('{$name}',25,'F',5,6),";
$statement.="('{$name}',20,'F',5,7),";
$statement.="('{$name}',21,'F',5,8),";
$statement.="('{$name}',22,'F',5,9),";
$statement.="('{$name}',23,'F',5,10),";

$statement.="('{$name}',20,'F',6,1),";
$statement.="('{$name}',21,'F',6,2),";
$statement.="('{$name}',22,'F',6,3),";
$statement.="('{$name}',23,'F',6,4),";
$statement.="('{$name}',24,'F',6,5),";
$statement.="('{$name}',25,'F',6,6),";
$statement.="('{$name}',20,'F',6,7),";
$statement.="('{$name}',21,'F',6,8),";
$statement.="('{$name}',22,'F',6,9),";
$statement.="('{$name}',23,'F',6,10),";

$statement.="('{$name}',20,'F',7,1),";
$statement.="('{$name}',21,'F',7,2),";
$statement.="('{$name}',22,'F',7,3),";
$statement.="('{$name}',23,'F',7,4),";
$statement.="('{$name}',24,'F',7,5),";
$statement.="('{$name}',25,'F',7,6),";
$statement.="('{$name}',20,'F',7,7),";
$statement.="('{$name}',21,'F',7,8),";
$statement.="('{$name}',22,'F',7,9),";
$statement.="('{$name}',23,'F',7,10),";

$statement.="('{$name}',20,'F',8,1),";
$statement.="('{$name}',21,'F',8,2),";
$statement.="('{$name}',22,'F',8,3),";
$statement.="('{$name}',23,'F',8,4),";
$statement.="('{$name}',24,'F',8,5),";
$statement.="('{$name}',25,'F',8,6),";
$statement.="('{$name}',20,'F',8,7),";
$statement.="('{$name}',21,'F',8,8),";
$statement.="('{$name}',22,'F',8,9),";
$statement.="('{$name}',23,'F',8,10),";

$statement.="('{$name}',20,'F',9,1),";
$statement.="('{$name}',21,'F',9,2),";
$statement.="('{$name}',22,'F',9,3),";
$statement.="('{$name}',23,'F',9,4),";
$statement.="('{$name}',24,'F',9,5),";
$statement.="('{$name}',25,'F',9,6),";
$statement.="('{$name}',20,'F',9,7),";
$statement.="('{$name}',21,'F',9,8),";
$statement.="('{$name}',22,'F',9,9),";
$statement.="('{$name}',23,'F',9,10),";

$statement.="('{$name}',20,'F',10,1),";
$statement.="('{$name}',21,'F',10,2),";
$statement.="('{$name}',22,'F',10,3),";
$statement.="('{$name}',23,'F',10,4),";
$statement.="('{$name}',24,'F',10,5),";
$statement.="('{$name}',25,'F',10,6),";
$statement.="('{$name}',20,'F',10,7),";
$statement.="('{$name}',21,'F',10,8),";
$statement.="('{$name}',22,'F',10,9),";
$statement.="('{$name}',23,'F',10,10),";

//

//
$statement.="('{$name}',25,'M',1,1),";
$statement.="('{$name}',24,'M',1,2),";
$statement.="('{$name}',23,'M',1,3),";
$statement.="('{$name}',22,'M',1,4),";
$statement.="('{$name}',21,'M',1,5),";
$statement.="('{$name}',20,'M',1,6),";
$statement.="('{$name}',21,'M',1,7),";
$statement.="('{$name}',22,'M',1,8),";
$statement.="('{$name}',23,'M',1,9),";
$statement.="('{$name}',24,'M',1,10),";

$statement.="('{$name}',25,'M',2,1),";
$statement.="('{$name}',24,'M',2,2),";
$statement.="('{$name}',23,'M',2,3),";
$statement.="('{$name}',22,'M',2,4),";
$statement.="('{$name}',21,'M',2,5),";
$statement.="('{$name}',21,'M',2,6),";
$statement.="('{$name}',22,'M',2,7),";
$statement.="('{$name}',23,'M',2,8),";
$statement.="('{$name}',24,'M',2,9),";
$statement.="('{$name}',25,'M',2,10),";

$statement.="('{$name}',25,'M',3,1),";
$statement.="('{$name}',24,'M',3,2),";
$statement.="('{$name}',23,'M',3,3),";
$statement.="('{$name}',22,'M',3,4),";
$statement.="('{$name}',21,'M',3,5),";
$statement.="('{$name}',21,'M',3,6),";
$statement.="('{$name}',22,'M',3,7),";
$statement.="('{$name}',23,'M',3,8),";
$statement.="('{$name}',24,'M',3,9),";
$statement.="('{$name}',25,'M',3,10),";

$statement.="('{$name}',25,'M',4,1),";
$statement.="('{$name}',24,'M',4,2),";
$statement.="('{$name}',23,'M',4,3),";
$statement.="('{$name}',22,'M',4,4),";
$statement.="('{$name}',21,'M',4,5),";
$statement.="('{$name}',21,'M',4,6),";
$statement.="('{$name}',22,'M',4,7),";
$statement.="('{$name}',23,'M',4,8),";
$statement.="('{$name}',24,'M',4,9),";
$statement.="('{$name}',25,'M',4,10),";

$statement.="('{$name}',25,'M',5,1),";
$statement.="('{$name}',24,'M',5,2),";
$statement.="('{$name}',23,'M',5,3),";
$statement.="('{$name}',22,'M',5,4),";
$statement.="('{$name}',21,'M',5,5),";
$statement.="('{$name}',21,'M',5,6),";
$statement.="('{$name}',22,'M',5,7),";
$statement.="('{$name}',23,'M',5,8),";
$statement.="('{$name}',24,'M',5,9),";
$statement.="('{$name}',25,'M',5,10),";

$statement.="('{$name}',20,'M',6,1),";
$statement.="('{$name}',21,'M',6,2),";
$statement.="('{$name}',22,'M',6,3),";
$statement.="('{$name}',23,'M',6,4),";
$statement.="('{$name}',24,'M',6,5),";
$statement.="('{$name}',25,'M',6,6),";
$statement.="('{$name}',20,'M',6,7),";
$statement.="('{$name}',21,'M',6,8),";
$statement.="('{$name}',22,'M',6,9),";
$statement.="('{$name}',23,'M',6,10),";

$statement.="('{$name}',20,'M',7,1),";
$statement.="('{$name}',21,'M',7,2),";
$statement.="('{$name}',22,'M',7,3),";
$statement.="('{$name}',23,'M',7,4),";
$statement.="('{$name}',24,'M',7,5),";
$statement.="('{$name}',25,'M',7,6),";
$statement.="('{$name}',20,'M',7,7),";
$statement.="('{$name}',21,'M',7,8),";
$statement.="('{$name}',22,'M',7,9),";
$statement.="('{$name}',23,'M',7,10),";

$statement.="('{$name}',20,'M',8,1),";
$statement.="('{$name}',21,'M',8,2),";
$statement.="('{$name}',22,'M',8,3),";
$statement.="('{$name}',23,'M',8,4),";
$statement.="('{$name}',24,'M',8,5),";
$statement.="('{$name}',25,'M',8,6),";
$statement.="('{$name}',20,'M',8,7),";
$statement.="('{$name}',21,'M',8,8),";
$statement.="('{$name}',22,'M',8,9),";
$statement.="('{$name}',23,'M',8,10),";

$statement.="('{$name}',20,'M',9,1),";
$statement.="('{$name}',21,'M',9,2),";
$statement.="('{$name}',22,'M',9,3),";
$statement.="('{$name}',23,'M',9,4),";
$statement.="('{$name}',24,'M',9,5),";
$statement.="('{$name}',25,'M',9,6),";
$statement.="('{$name}',20,'M',9,7),";
$statement.="('{$name}',21,'M',9,8),";
$statement.="('{$name}',22,'M',9,9),";
$statement.="('{$name}',23,'M',9,10),";

$statement.="('{$name}',20,'M',10,1),";
$statement.="('{$name}',21,'M',10,2),";
$statement.="('{$name}',22,'M',10,3),";
$statement.="('{$name}',23,'M',10,4),";
$statement.="('{$name}',24,'M',10,5),";
$statement.="('{$name}',25,'M',10,6),";
$statement.="('{$name}',20,'M',10,7),";
$statement.="('{$name}',21,'M',10,8),";
$statement.="('{$name}',22,'M',10,9),";
$statement.="('{$name}',23,'M',10,10),";

$statement.="('{$name}',20,'F',1,1),";
$statement.="('{$name}',21,'F',1,2),";
$statement.="('{$name}',22,'F',1,3),";
$statement.="('{$name}',23,'F',1,4),";
$statement.="('{$name}',24,'F',1,5),";
$statement.="('{$name}',25,'F',1,6),";
$statement.="('{$name}',20,'F',1,7),";
$statement.="('{$name}',21,'F',1,8),";
$statement.="('{$name}',22,'F',1,9),";
$statement.="('{$name}',23,'F',1,10),";

$statement.="('{$name}',20,'F',2,1),";
$statement.="('{$name}',21,'F',2,2),";
$statement.="('{$name}',22,'F',2,3),";
$statement.="('{$name}',23,'F',2,4),";
$statement.="('{$name}',24,'F',2,5),";
$statement.="('{$name}',25,'F',2,6),";
$statement.="('{$name}',20,'F',2,7),";
$statement.="('{$name}',21,'F',2,8),";
$statement.="('{$name}',22,'F',2,9),";
$statement.="('{$name}',23,'F',2,10),";

$statement.="('{$name}',20,'F',3,1),";
$statement.="('{$name}',21,'F',3,2),";
$statement.="('{$name}',22,'F',3,3),";
$statement.="('{$name}',23,'F',3,4),";
$statement.="('{$name}',24,'F',3,5),";
$statement.="('{$name}',25,'F',3,6),";
$statement.="('{$name}',20,'F',3,7),";
$statement.="('{$name}',21,'F',3,8),";
$statement.="('{$name}',22,'F',3,9),";
$statement.="('{$name}',23,'F',3,10),";

$statement.="('{$name}',20,'F',4,1),";
$statement.="('{$name}',21,'F',4,2),";
$statement.="('{$name}',22,'F',4,3),";
$statement.="('{$name}',23,'F',4,4),";
$statement.="('{$name}',24,'F',4,5),";
$statement.="('{$name}',25,'F',4,6),";
$statement.="('{$name}',20,'F',4,7),";
$statement.="('{$name}',21,'F',4,8),";
$statement.="('{$name}',22,'F',4,9),";
$statement.="('{$name}',23,'F',4,10),";

$statement.="('{$name}',20,'F',5,1),";
$statement.="('{$name}',21,'F',5,2),";
$statement.="('{$name}',22,'F',5,3),";
$statement.="('{$name}',23,'F',5,4),";
$statement.="('{$name}',24,'F',5,5),";
$statement.="('{$name}',25,'F',5,6),";
$statement.="('{$name}',20,'F',5,7),";
$statement.="('{$name}',21,'F',5,8),";
$statement.="('{$name}',22,'F',5,9),";
$statement.="('{$name}',23,'F',5,10),";

$statement.="('{$name}',20,'F',6,1),";
$statement.="('{$name}',21,'F',6,2),";
$statement.="('{$name}',22,'F',6,3),";
$statement.="('{$name}',23,'F',6,4),";
$statement.="('{$name}',24,'F',6,5),";
$statement.="('{$name}',25,'F',6,6),";
$statement.="('{$name}',20,'F',6,7),";
$statement.="('{$name}',21,'F',6,8),";
$statement.="('{$name}',22,'F',6,9),";
$statement.="('{$name}',23,'F',6,10),";

$statement.="('{$name}',20,'F',7,1),";
$statement.="('{$name}',21,'F',7,2),";
$statement.="('{$name}',22,'F',7,3),";
$statement.="('{$name}',23,'F',7,4),";
$statement.="('{$name}',24,'F',7,5),";
$statement.="('{$name}',25,'F',7,6),";
$statement.="('{$name}',20,'F',7,7),";
$statement.="('{$name}',21,'F',7,8),";
$statement.="('{$name}',22,'F',7,9),";
$statement.="('{$name}',23,'F',7,10),";

$statement.="('{$name}',20,'F',8,1),";
$statement.="('{$name}',21,'F',8,2),";
$statement.="('{$name}',22,'F',8,3),";
$statement.="('{$name}',23,'F',8,4),";
$statement.="('{$name}',24,'F',8,5),";
$statement.="('{$name}',25,'F',8,6),";
$statement.="('{$name}',20,'F',8,7),";
$statement.="('{$name}',21,'F',8,8),";
$statement.="('{$name}',22,'F',8,9),";
$statement.="('{$name}',23,'F',8,10),";

$statement.="('{$name}',20,'F',9,1),";
$statement.="('{$name}',21,'F',9,2),";
$statement.="('{$name}',22,'F',9,3),";
$statement.="('{$name}',23,'F',9,4),";
$statement.="('{$name}',24,'F',9,5),";
$statement.="('{$name}',25,'F',9,6),";
$statement.="('{$name}',20,'F',9,7),";
$statement.="('{$name}',21,'F',9,8),";
$statement.="('{$name}',22,'F',9,9),";
$statement.="('{$name}',23,'F',9,10),";

$statement.="('{$name}',20,'F',10,1),";
$statement.="('{$name}',21,'F',10,2),";
$statement.="('{$name}',22,'F',10,3),";
$statement.="('{$name}',23,'F',10,4),";
$statement.="('{$name}',24,'F',10,5),";
$statement.="('{$name}',25,'F',10,6),";
$statement.="('{$name}',20,'F',10,7),";
$statement.="('{$name}',21,'F',10,8),";
$statement.="('{$name}',22,'F',10,9),";
$statement.="('{$name}',23,'F',10,10);";

//

$start=microtime(true);
if($connection->query($statement)===FALSE) echo("Error: {$connection->error}");
$end=microtime(true);
echo("Query OK, (".($end-$start)." sec)\n");
}
$connection->close();
?>
