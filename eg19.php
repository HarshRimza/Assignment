<?php
$connection=new mysqli("localhost:3306","root","harsh","me");
if($connection->connect_error) die("Connection failed: ".$connection->connect_error);

$statement="select 100*(select count(*) from student where gender='M')/count(*) as male_percent from student";
$executionTime=microtime(true);
$result=$connection->query($statement);
$executionTime=number_format((microtime(true)-$executionTime),10);
if(mysqli_num_rows($result)>0)
{
$rows=mysqli_fetch_all($result);
$howManyMale=$row['male_percent'];
echo("$howManyMale\n");
echo("$executionTime\n");
}
else
{
echo("Failed\n");
}
mysqli_free_result($result);












$connection->close();
?>
