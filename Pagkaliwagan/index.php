<!DOCTYPE html>
<html>
<head>
<title>SAMPLE PHP with MySQL</title>
    </head>
            <body>
                <?php include('conn.php');?>
                <div>
                <form action="search.php" method="post" >
                <table>
                <tr>
                            <td width="30%"><a href='add.php'>Add Record</a>
                            <td width="70%"><input type="text" name="search" Maxlenght="50" required/>
                            <input type="submit" name="Submit" id="Submit" value="SEARCH"/>
                            </td>                      
            </table>
            </form>
            <table border="1">
                <thead>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
            </thead>
            <tbody>
                                <?php
                                $query=mysqli_query($conn,"SELECT * FROM studentstbl");
                                while($row=mysqli_fetch_array($query)){

                                    $sid = $row['sid'];
                                    $firstname = $row['firstname'];
                                    $middlename = $row['middlename'];
                                    $lastname = $row['lastname'];
                                    $course = $row['course'];
                                    $yearlevel = $row['yearlevel'];
                                    ?>
                                    <tr>
                                        <td><?php echo $sid; ?></td>
                                        <td><?php echo $firstname; ?></td>
                                        <td><?php echo $middlename; ?></td>
                                        <td><?php echo $lastname; ?></td>
                                        <td><?php echo $course; ?></td>
                                        <td><?php echo $yearlevel; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $sid; ?>">Edit</a>
                                        <a href="delete.php?id=<?php echo $sid; ?>">Delete</a>
                                    <td>
                                </tr>
                        <?php
                            }
                        ?>
            </tbody>
        </table>
</body>
</html>