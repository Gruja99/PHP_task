<?php
include("database.php");
if (isset($_POST['csm'])) {
    $studentid = $_POST['studentid'];
    $mark1 = $_POST['mark1'];
    $mark2 = $_POST['mark2'];
    $mark3 = $_POST['mark3'];
    $mark4 = $_POST['mark4'];

    $marks = array($mark1, $mark2, $mark3, $mark4);
    $marks = array_filter($marks);
    $average = array_sum($marks)/count($marks);
    if($average >=7)
    {
        $pass = "True";
    }
    else{
        $pass = "False";
    }
   
    $marks =  implode(" , ",$marks);
    echo($marks);
    $query = "INSERT INTO grade(StudentID, Marks, Pass ) VALUES ('$studentid', '$marks', '$pass') ";
    mysqli_query($conn, $query);
    
        header('location: index.php');
   
}
if (isset($_POST['csmb'])) {
    $studentid = $_POST['studentid'];
    $mark1 = $_POST['mark1'];
    $mark2 = $_POST['mark2'];
    $mark3 = $_POST['mark3'];
    $mark4 = $_POST['mark4'];

    $marks = array($mark1, $mark2, $mark3, $mark4);
    $marks =  implode(" , ",$marks);
    echo($marks);
    $query = "INSERT INTO grade(StudentID, Marks, Pass ) VALUES ('$studentid', '$marks', '$pass') ";
    mysqli_query($conn, $query);
    
        header('location: index.php');
   
}
?>

