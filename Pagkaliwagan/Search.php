<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <a href='index.php'> Home </a>
    <form id="theForm" method="post" action="update.php?id=<?php echo $id ?>">
</head>
<body>
    <?php 
    include('conn.php');
    
    if(isset($_POST['search'])){
        $search = $_POST['search'];

        $query = "SELECT * FROM studentstbl WHERE firstname LIKE '%$search%'OR middlename LIKE '%$search%' OR lastname LIKE '%$search%'";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            echo "<h2>Search Results:</h2>";
            echo "<table border='1'>
                <thead>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </thead>
                <tbody>";

            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['sid']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['middlename']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['course']."</td>
                        <td>".$row['yearlevel']."</td>
                        <td>
                            <a href='edit.php?id=".$row['sid']."'>Edit</a>
                            <a href='delete.php?id=".$row['sid']."'>Delete</a>
                        </td>
                    </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "No records found.";
        }
    } else {
        echo "Please enter a search query.";
    }
    ?>

</body>
</html>


