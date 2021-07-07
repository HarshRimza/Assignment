<?php

// our model
class City
{
private $code;
private $name;
public function __construct()
{
$this->code=0;
$this->name="";
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
}

class Course
{
private $code;
private $name;
public function __construct()
{
$this->code=0;
$this->name="";
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
}


class Student
{
private $code;
private $name;
private $age;
private $gender;
private $city;
private $course;
public function __construct()
{
$this->code=0;
$this->name="";
$this->age=0;
$this->gender="";
$this->city=NULL;
$this->course=NULL;
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
public function setCity($city)
{
$this->city=$city;
}
public function getCity()
{
return $this->city;
}
public function setCourse($course)
{
$this->course=$course;
}
public function getCourse()
{
return $this->course;
}
}


class View
{
public function __construct()
{}
public function updateView($message)
{
if($message instanceof Student) 
{
printf("Student Details \n");
printf("+--------------------+--------------------+\n");
printf("|%-20s|%20d|\n","Student Id",$message->getCode());
printf("+--------------------+--------------------+\n");
printf("|%-20s|%-20s|\n","Name",$message->getName());
printf("+--------------------+--------------------+\n");
printf("|%-20s|%20d|\n","Age",$message->getAge());
printf("+--------------------+--------------------+\n");
printf("|%-20s|%-20s|\n","Gender",$message->getGender());
printf("+--------------------+--------------------+\n");
printf("|%-20s|%-20s|\n","City Name",$message->getCity()->getName());
printf("+--------------------+--------------------+\n");
printf("|%-20s|%-20s|\n","Course Name",$message->getCourse()->getName());
printf("+--------------------+--------------------+\n");
}
if($message instanceof mysqli_result)
{
printf("Student Details \n");
echo("+----------+--------------------+----------+----------+--------------------+---------------+\n");
printf("|%-10s|%-20s|%-10s|%-10s|%-20s|%-15s|\n","Student Id","Name","Age","Gender","Course","City");
echo("+----------+--------------------+----------+----------+--------------------+---------------+\n");
$length=mysqli_num_rows($message);
for($i=1;$i<=$length;$i++)
{
$row=mysqli_fetch_array($message);
$code=$row['student_id'];
$name=$row['name'];
$age=$row['age'];
$gender=$row['gender'];
$cityName=$row['city_name'];
$courseName=$row['course_name'];
printf("|%10d|%-20s|%-10d|%-10s|%-20s|%-15s|\n",$code,$name,$age,$gender,$courseName,$cityName);
echo("+----------+--------------------+----------+----------+--------------------+---------------+\n");
}
}
else
{
echo("$message");
}
}
public function showMenu()
{
echo("1. Add Student\n");
echo("2. Edit Student\n");
echo("3. Search Student\n");
echo("4. Delete Student\n");
echo("5. Display List of Student\n");
echo("6. Exit\n");
echo("Enter your choice : ");
fscanf(STDIN,"%d",$choice);
return $choice;
}
}

class Controller
{
private $model;
private $view;
function __construct($model,$view)
{
$this->model=$model;
$this->view=$view;
}

function modelChanged($model,$message)
{
if($model)
{
$this->model->setCode($model->getCode());
$this->model->setName($model->getName());
$this->model->setAge($model->getAge());
$this->model->setGender($model->getGender());
$this->model->setCourse($model->getCourse());
$this->model->setCity($model->getCity());
}
$this->view->updateView($message);
}

function start()
{
while(1)
{
try
{
$choice=$this->view->showMenu();
if($choice==1) addStudent($this);
if($choice==2) editStudent($this);
if($choice==3) searchStudent($this);
if($choice==4) deleteStudent($this);
if($choice==5) displayListOfStudents($this);
if($choice==6) break;
}
catch(Exception $e)
{
echo("{$e->getMessage()}\n");
}
}
echo("Bye!\n");
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
$city=new City();
$city->setCode($cityCode);
$student->setCity($city);

echo("Enter course code : ");
fscanf(STDIN,"%d",$courseCode);
if($courseCode<=0) throw new Exception("Invalid course code");
$course=new Course();
$course->setCode($courseCode);
$student->setCourse($course);
return $student;
}

function addStudent($controller)
{
echo("Student (Add Module)\n");
$student=getDataFromUser();
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
$statement="insert into student (name,age,gender,city_code,course_code) values('{$student->getName()}',{$student->getAge()},'{$student->getGender()}',{$student->getCity()->getCode()},{$student->getCourse()->getCode()})";
if($connection->query($statement)===TRUE)  $controller->modelChanged($student,"Student Added\n");
else $controller->modelChanged(NULL,"Error: ".$connection->error);
$connection->close();
}

function editStudent($controller)
{
echo("Student (Edit Module)\n");
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
echo("Enter student id : ");
fscanf(STDIN,"%d",$code);
if($code<=0) throw new Exception("Invalid student id");
$statement="select * from student where student_id={$code}";
if(!$connection->query($statement)) 
{
echo("Student not found\n");
return;
}
$student=getDataFromUser();
$student->setCode($code);
$statement="update student set name='{$student->getName()}',age={$student->getAge()},gender='{$student->getGender()}',city_code={$student->getCity()->getCode()},course_code={$student->getCourse()->getCode()} where student_id={$student->getCode()}";
if($connection->query($statement)===TRUE)  $controller->modelChanged($student,"Student Updated\n");
else $controller->modelChanged(NULL,"Error: {$connection->error}");
$connection->close();
}
function searchStudent($controller)
{
echo("Student (Search Module)\n");
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
echo("Enter student id : ");
fscanf(STDIN,"%d",$code);
if($code<=0) throw new Exception("Invalid student id");
$statement="select student_id,name,age,gender,city_code,course_code,course.title as course_name,city.title as city_name from student,city,course where student.city_code=city.code and student.course_code=course.code and student_id={$code}";
$result=$connection->query($statement);
if(!$result || mysqli_num_rows($result)==0) 
{
mysqli_free_result($result);
echo("Student not found\n");
return;
}
$row=mysqli_fetch_array($result);
$student=new Student();
$city=new City();
$course=new Course();
$student->setCode($row['student_id']);
$student->setName($row['name']);
$student->setAge($row['age']);
$student->setGender($row['gender']);
$city->setCode($row['city_code']);
$city->setName($row['city_name']);
$student->setCity($city);
$course->setCode($row['course_code']);
$course->setName($row['course_name']);
$student->setCourse($course);
$controller->modelChanged($student,$student);
mysqli_free_result($result);
$connection->close();
}

function deleteStudent($controller)
{
echo("Student (Delete Module)\n");
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
echo("Enter student id : ");
fscanf(STDIN,"%d",$code);
if($code<=0) throw new Exception("Invalid student id");
$statement="select * from student where student_id={$code}";
$result=$connection->query($statement);
if(!$result || mysqli_num_rows($result)==0) 
{
mysqli_free_result($result);
$controller->modelChanged(NULL,"Student not found\n");
return;
}
$statement="delete from student where student_id={$code}";
if($connection->query($statement)===TRUE)  $controller->modelChanged(new Student(),"Student Deleted\n");
else $controller->modelChanged(NULL,"Error: {$connection->error}");
$connection->close();
}
function displayListOfStudents($controller)
{
echo("Student (List Module)\n");
$connection=new mysqli("localhost:3306","root","harsh","db");
if($connection->connect_error)  die("Connection failed: ".$connection->connect_error);
$statement="select student_id,name,age,gender,course.title as course_name,city.title as city_name from student,city,course where student.city_code=city.code and student.course_code=course.code";
$start=microtime(true);
$result=$connection->query($statement);
$end=microtime(true);
$length=mysqli_num_rows($result);
if(!$result || $length==0) 
{
mysqli_free_result($result);
$controller->modelChanged(NULL,"Students not added yet.\n");
return;
}
$controller->modelChanged(NULL,$result);
//echo("Query OK, (".(float)($end-$start)." sec)\n");
mysqli_free_result($result);
$connection->close();
}

$controller=new Controller(new Student(),new View());
$controller->start();
?>