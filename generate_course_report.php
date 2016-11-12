<?php

$dblink = mysqli_connect("localhost", "ib_01", "205IT:D", "ib_test");

if(!$dblink) {
    echo "Conenction Failed!";
} 

$courseID = $_POST["courseID"];

$sqlCmd = 'SELECT firstName, lastName FROM student WHERE courseID LIKE "'. $courseID. '"';

$result = mysqli_query($dblink, $sqlCmd);

if(!$result) {
    echo 'Error: ' .mysqli_error($dblink) . '\n';
}

$row = " ";

echo "<table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th> 
        </tr>";
while($row) {
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "<tr>
                <td>".$row["firstName"]."</td>
                <td>".$row["lastName"]."</td> 
            </tr>";
    }
}
echo "</table>";

echo "<a href='http://ib.205it.cucstudents.org/course_report.php'> Back </a>";
?>