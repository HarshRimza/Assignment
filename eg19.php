<?php

$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error) die("Connection failed: ".$connection->connect_error);

$statement="select count(1) from student where course_code in (select code from course)";
$executionTime=microtime(true);
$result=$connection->query($statement);
$executionTime=number_format((microtime(true)-$executionTime),10);
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_array($result);
$total_students=$row['0'];
echo("Total Students : $total_students\n");
echo("Query ok, ($executionTime sec)\n");
}
else
{
echo("Failed\n");
}
mysqli_free_result($result);
echo("\n");

$statement="select 100*(select count(1) from student where gender='M')/$total_students";
$executionTime=microtime(true);
$result=$connection->query($statement);
$executionTime=number_format((microtime(true)-$executionTime),10);
if(mysqli_num_rows($result)>0)
{
$male_percent=mysqli_fetch_array($result)[0];
$female_percent=100-$male_percent;
echo("Male : $male_percent%, Female : $female_percent%\n");
echo("Query ok, ($executionTime sec)\n");
}
else
{
echo("Failed\n");
}
mysqli_free_result($result);
echo("\n");


$statement="select title,(100*(select count(course_code) from student where course_code=course.code)/$total_students) from course";
$executionTime=microtime(true);
$result=$connection->query($statement);
$executionTime=number_format((microtime(true)-$executionTime),10);
if(mysqli_num_rows($result)>0)
{
$rows=mysqli_fetch_all($result);
echo("Students taken Courses\n");
foreach($rows as $row)
{
printf("%-10s:%10s%%\n",$row[0],$row[1]);
}
echo("Query ok, ($executionTime sec)\n");
}
else
{
echo("Failed\n");
}
mysqli_free_result($result);
echo("\n");

$statement="select title,(100*(select count(city_code) from student where city_code=city.code)/$total_students) from city";
$executionTime=microtime(true);
$result=$connection->query($statement);
$executionTime=number_format((microtime(true)-$executionTime),10);
if(mysqli_num_rows($result)>0)
{
$rows=mysqli_fetch_all($result);
echo("Students from Cities\n");
foreach($rows as $row)
{
printf("%-10s:%10s%%\n",$row[0],$row[1]);
}
echo("Query ok, ($executionTime sec)\n");
}
else
{
echo("Failed\n");
}
mysqli_free_result($result);
echo("\n");



$statement="select city.title,course.title,(100*(select count(1) from student where city_code=city.code and course_code=course.code)/$total_students) from city,course";
$executionTime=microtime(true);
$result=$connection->query($statement);
$executionTime=number_format((microtime(true)-$executionTime),10);
if(mysqli_num_rows($result)>0)
{
$rows=mysqli_fetch_all($result);
echo("City with Course percentage\n");
foreach($rows as $row)
{
printf("For %-10s from %-10s are %10s%%\n",$row[1],$row[0],$row[2]);
}
echo("Query ok, ($executionTime sec)\n");
}
else
{
echo("Failed\n");
}
mysqli_free_result($result);
echo("\n");

$statement="select city.title,(100*(select count(1) from student where city_code=city.code and gender='M')/$total_students) from city";
$executionTime=microtime(true);
$result=$connection->query($statement);
$executionTime=number_format((microtime(true)-$executionTime),10);
if(mysqli_num_rows($result)>0)
{
$rows=mysqli_fetch_all($result);
echo("Male Students from Cities\n");
foreach($rows as $row)
{
printf("From %-10s : %10s%%\n",$row[0],$row[1]);
}
echo("Query ok, ($executionTime sec)\n");
}
else
{
echo("Failed\n");
}
mysqli_free_result($result);
echo("\n");

$statement="select city.title,(100*(select count(1) from student where city_code=city.code and gender='F')/$total_students) from city";
$executionTime=microtime(true);
$result=$connection->query($statement);
$executionTime=number_format((microtime(true)-$executionTime),10);
if(mysqli_num_rows($result)>0)
{
$rows=mysqli_fetch_all($result);
echo("Female Students from Cities\n");
foreach($rows as $row)
{
printf("From %-10s : %10s%%\n",$row[0],$row[1]);
}
echo("Query ok, ($executionTime sec)\n");
}
else
{
echo("Failed\n");
}
mysqli_free_result($result);
echo("\n");

$connection->close();
?>
