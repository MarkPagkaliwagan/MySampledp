<?php
    include('conn.php');

    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $course=$_POST['course'];
    $yearlevel=$_POST['yearlevel'];

    mysqli_query($conn,"INSERT INTO studentstbl (firstname,middlename,lastname,course,yearlevel) VALUES ('$firstname','$middlename','$lastname','$course','$yearlevel')");
    header('location:index.php');

?>