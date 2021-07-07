<?php
// Report Generation Incomplete Code

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

// for a particular course
select 100*(select count(*) from student where course_code=5)/count(*) as course_percent from student;

// for all course percent
select title,(100*(select count(*) from student where course_code=course.code)/(select count(*) from student)) as course_percents from course;

// for all city percent
select title,(100*(select count(*) from student where city_code=city.code)/(select count(*) from student)) as city_percents from city;

//for both city and course
select city.title,course.title,(100*(select count(*) from student where city_code=city.code and course_code=course.code)/(select count(*) from student)) as percents from city,course;

// for both gender=M and city

select city.title,(100*(select count(*) from student where city_code=city.code and gender='M')/(select count(*) from student)) as percents from city;










$connection->close();
?>
