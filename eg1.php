<?php
// without MVC
class Student
{
public $code;
public $name;
public $age;
public $gender;
public $cityCode;
public $courseCode;
public function __construct()
{
$this->code=0;
$this->name="";
$this->age=0;
$this->gender="";
$this->cityCode=0;
$this->courseCode=0;
}
public function setCode($code)
{
$this->code=$code;
}
public function getCode()
{
return $this->code;
}
public function setName($name)
{
$this->name=$name;
}
public function getName()
{
return $this->name;
}
public function setAge($age)
{
$this->age=$age;
}
public function getAge()
{
return $this->age;
}
public function setGender($gender)
{
$this->gender=$gender;
}
public function getGender()
{
return $this->gender;
}
public function setCityCode($cityCode)
{
$this->cityCode=$cityCode;
}
public function getCityCode()
{
return $this->cityCode;
}
public function setCourseCode($courseCode)
{
$this->courseCode=$courseCode;
}
public function getCourseCode()
{
return $this->courseCode;
}
}








function getDataFromUser()
{
$student=new Student();

echo("Enter name : ");
fscanf(STDIN,"%s",$name);
if(strlen($name)==0 || is_numeric($name)) throw new Exception("Please enter name");
$student->setName($name);

echo("Enter age : ");
fscanf(STDIN,"%d",$age);
if($age<=0) throw new Exception("Invalid age");
$student->setAge($age);

echo("Enter gender : ");
fscanf(STDIN,"%c",$gender);
if(strcasecmp($gender,"M")!=0 && strcasecmp($gender,"F")!=0) throw new Exception("Please enter gender (M/F)");
$student->setGender($gender);

echo("Enter city code : ");
fscanf(STDIN,"%d",$cityCode);
if($cityCode<=0) throw new Exception("Invalid city code");
$student->setCityCode($cityCode);

echo("Enter course code : ");
fscanf(STDIN,"%d",$courseCode);
if($courseCode<=0) throw new Exception("Invalid course code");
$student->setCourseCode($courseCode);
return $student;
}



/*
echo("$student->rollNumber\n");
echo("$student->name\n");
echo("$student->age\n");
echo("$student->gender\n");
echo("$student->cityCode\n");
echo("$student->courseCode\n");
*/


function addStudent()
{
echo("Student (Add Module)\n");
$student=getDataToAddFromUser();
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
$statement="insert into student (name,age,gender,city_code,course_code) values('{$student->getName()}',{$student->getAge()},'{$student->getGender()}',{$student->getCityCode()},{$student->getCourseCode()})";
if($connection->query($statement)===TRUE)  echo("Student Added\n");
else echo("Error: ".$connection->error);
$connection->close();
}

function editStudent()
{
echo("Student (Edit Module)\n");
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
echo("Enter student id : ");
fscanf(STDIN,"%d",$code);
if($code<=0) throw new Exception("Invalid student id\n");
$statement="select * from student where student_id={$code}";
if(!$connection->query($statement)) 
{
echo("Student not found\n");
return;
}
$student=getDataFromUser();
$student->setCode($code);
$statement="update student set name='{$student->getName()}',age={$student->getAge()},gender='{$student->getGender()}',city_code={$student->getCityCode()},course_code={$student->getCourseCode()} where student_id={$student->getCode()}";
if($connection->query($statement)===TRUE)  echo("Student Updated\n");
else echo("Error: ".$connection->error);
$connection->close();
}
function searchStudent()
{
echo("Student (Search Module)\n");
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
echo("Enter student id : ");
fscanf(STDIN,"%d",$code);
if($code<=0) throw new Exception("Invalid student id\n");
$statement="select student_id,name,age,gender,course.title as course_name,city.title as city_name from student,city,course where student.city_code=city.code and student.course_code=course.code and student_id={$code}";
$result=$connection->query($statement);
if(!$result || mysqli_num_rows($result)==0) 
{
mysqli_free_result($result);
echo("Student not found\n");
return;
}
$row=mysqli_fetch_array($result);
$code=$row['student_id'];
$name=$row['name'];
$age=$row['age'];
$gender=$row['gender'];
$cityName=$row['city_name'];
$courseName=$row['course_name'];
mysqli_free_result($result);
printf("Student Details \n");
printf("+--------------------+--------------------+\n");
printf("|%-20s|%20d|\n","Student Id",$code);
printf("+--------------------+--------------------+\n");
printf("|%-20s|%-20s|\n","Name",$name);
printf("+--------------------+--------------------+\n");
printf("|%-20s|%20d|\n","Age",$age);
printf("+--------------------+--------------------+\n");
printf("|%-20s|%-20s|\n","Gender",$gender);
printf("+--------------------+--------------------+\n");
printf("|%-20s|%-20s|\n","City Name",$cityName);
printf("+--------------------+--------------------+\n");
printf("|%-20s|%-20s|\n","Course Name",$courseName);
printf("+--------------------+--------------------+\n");
$connection->close();
}

function deleteStudent()
{
echo("Student (Delete Module)\n");
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
echo("Enter student id : ");
fscanf(STDIN,"%d",$code);
if($code<=0) throw new Exception("Invalid student id\n");
$statement="select * from student where student_id={$code}";
$result=$connection->query($statement);
if(!$result || mysqli_num_rows($result)==0) 
{
mysqli_free_result($result);
echo("Student not found\n");
return;
}
$statement="delete from student where student_id={$code}";
if($connection->query($statement)===TRUE)  echo("Student Deleted\n");
else echo("Error: ".$connection->error);
$connection->close();
}
function displayListOfStudents()
{
echo("Student (List Module)\n");
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
$statement="select student_id,name,age,gender,course.title as course_name,city.title as city_name from student,city,course where student.city_code=city.code and student.course_code=course.code";
$result=$connection->query($statement);
$length=mysqli_num_rows($result);
if(!$result || $length==0) 
{
mysqli_free_result($result);
echo("Students not added yet.\n");
return;
}
printf("Student Details \n");
echo("+----------+--------------------+----------+----------+--------------------+---------------+\n");
printf("|%-10s|%-20s|%-10s|%-10s|%-20s|%-15s|\n","Student Id","Name","Age","Gender","Course","City");
echo("+----------+--------------------+----------+----------+--------------------+---------------+\n");
for($i=1;$i<=$length;$i++)
{
$row=mysqli_fetch_array($result);
$code=$row['student_id'];
$name=$row['name'];
$age=$row['age'];
$gender=$row['gender'];
$cityName=$row['city_name'];
$courseName=$row['course_name'];
printf("|%10d|%-20s|%-10d|%-10s|%-20s|%-15s|\n",$code,$name,$age,$gender,$courseName,$cityName);
echo("+----------+--------------------+----------+----------+--------------------+---------------+\n");
}
mysqli_free_result($result);
$connection->close();
}

function start()
{
while(1)
{
try
{
echo("1. Add Student\n");
echo("2. Edit Student\n");
echo("3. Search Student\n");
echo("4. Delete Student\n");
echo("5. Display List of Student\n");
echo("6. Exit\n");
echo("Enter your choice : ");
fscanf(STDIN,"%d",$choice);
if($choice==1) addStudent();
if($choice==2) editStudent();
if($choice==3) searchStudent();
if($choice==4) deleteStudent();
if($choice==5) displayListOfStudents();
if($choice==6) break;
}
catch(Exception $e)
{
echo($e->getMessage());
}
}
echo("Bye!\n");
}

start();




$controller=new Controller(new View(),new Student())
$controller.start();
?>
