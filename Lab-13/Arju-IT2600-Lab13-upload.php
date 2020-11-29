<?php


$sname = $_POST['name'];
// $coursenumber = $_POST['cno'];
$cname = $_POST['cname'];
$sem = $_POST['semester'];
$year = $_POST['year'];

 class Course 
{  
      
    Public $name; 
    Public $coursename; 
    public $semester;
    public $year;
  
    function __construct($name,$coursename,$semester,$year) 
  
    { 
        // This is initializing the class properties 
        $this->name=$name; 
        $this->coname=$coursename;
        $this->semname=$semester;
        $this->y=$year; 
  
  
    }      
    function show_details() 
    { 
      echo "Student Name : " .$this->name  . "</br>";
	echo "Course Name : " .$this->coname  . "</br>";
	echo "Semester : " .$this->semname  . "</br>";
	echo "Year : " .$this->y  . "</br>";
    } 
} 
      
$course= new Course($sname,$cname,$sem,$year); 
$course->show_details(); 

  ?>