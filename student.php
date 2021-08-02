<?php
include("database.php");


$query = "SELECT student.*, grade.Marks, grade.Pass FROM student JOIN grade ON student.StudentID = grade.StudentID";
$student = mysqli_query($conn, $query);

echo json_encode($student);