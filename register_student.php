<?php 

$studentID = $_POST["student_ID"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$DOB = $_POST["dob"];
$courseID = $_POST["course_ID"];

$dblink = mysql_connect("localhost", "ib_01", "205IT:D");

if(mysql_select_db("ib_test", $dblink)){
    echo "Connected";
    
    $sqlCommand = 'INSERT INTO student (studentID,                firstName, 
    lastName, DOB, courseID)
                  VALUES  ("'.$studentID.'","'.$first_name.'","'.$last_name.'","'.$DOB.'","'.$courseID.'")';
    
    print($sqlCommand);
    
    $retval = mysql_query( $sqlCommand, $dblink );
    
    if(! $retval )
    {
        die('Could not add student: ' . mysql_error());
    }
}
else{
    echo "Error";
} 

?>