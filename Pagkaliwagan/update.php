<?php
    include('conn.php');
    $id=$_GET['id'];

    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $course=$_POST['course'];
    $yearlevel=$_POST['yearlevel'];

    mysqli_query($conn,"UPDATE studentstbl SET firstname = '$firstname' , middlename = '$middlename' , lastname = '$lastname' , course = '$course' , yearlevel= '$yearlevel' where sid='$id'");
    header('location:index.php');
