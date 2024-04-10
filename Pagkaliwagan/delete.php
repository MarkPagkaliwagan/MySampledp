    <?php
    include('conn.php');
    $id = $_GET['id'];

    if(isset($_POST['confirm']) && $_POST['confirm'] === 'Yes') {
        mysqli_query($conn, "DELETE FROM studentstbl WHERE sid = '$id'");
        header('location:index.php');
        exit(); 
    } elseif(isset($_POST['confirm']) && $_POST['confirm'] === 'No') {
        header('location:index.php');
        exit(); 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Confirmation</title>
</head>
<body>
    <h2>Are you sure you want to delete this record?</h2>
    <form method="post">
        <input type="submit" name="confirm" value="Yes">
        <input type="submit" name="confirm" value="No">
    </form>
</body>
</html>
