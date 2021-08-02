<?php
include("database.php");


$query = "SELECT student.*, grade.Marks, grade.Pass FROM student JOIN grade ON student.StudentID = grade.StudentID";
$student = mysqli_query($conn, $query);


while ($row = mysqli_fetch_array($student)) {
    $students = $row;
}

header('Content-type:application/json;charset=utf-8');
echo json_encode($students);
