<?php
include("database.php");
if(isset($_POST['register']))
{
    $studentid = $_POST['studentid'];
    $name = $_POST['name'];
    $board = $_POST['board'];
    
    $query = "INSERT INTO student(StudentID, Name, Board ) VALUES ('$studentid',  '$name', '$board') ";
    mysqli_query($conn, $query);
    if ($board == 1) {
        header('location: csm.php');
    }
    else
    {
        header('location: csmb.php');
    }
      
}
?>
