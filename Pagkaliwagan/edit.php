<!DOCTYPE html>
<html>
<head>
<title> EDIT </title>
</head>
<body>
<?php
        include ('conn.php');
        $id=$_GET['id'];
        $query=mysqli_query($conn, "SELECT * FROM studentstbl where sid= '$id'");
        $row=mysqli_fetch_array($query);
    ?>
    <h2>Edit</h2>
    <a href='index.php'> Home </a>
    <form id="theForm" method="post" action="update.php?id=<?php echo $id ?>">
    <tbody>
    <table width="60%" border="1">
                <thead align="center">
                <th colspan="2"> Add</th>
                </thead>
        <?php
            $firstname = $row['firstname'];
            $middlename = $row['middlename'];
            $lastname= $row['lastname'];
            $course= $row['course'];
            $yearlevel = $row['yearlevel'];
        ?>
    <body>
        <td width="30">First Name: </td>
        <td width="70%"><input type="text" name="firstname" value="<?php echo $firstname; ?>" maxlength="50" required />
        </tr>
        
        <td width="30">Middle Name: </td>
        <td width="70%"><input type="text" name="middlename"  value="<?php echo $middlename; ?>" maxlength="50" required />
        </tr>
        
        <td width="30">last Name: </td>
        <td width="70%"><input type="text" name="lastname"  value="<?php echo $lastname; ?>" maxlength="50" required />
        </tr>
                
        <td width="40%">Course: </span></td>
        <td width="70%">
        <select name="course">
            <option type="radio" value="BSCS" <?php if ($course == 'BSCS'){echo 'selected= "Selected"';} ?>> BSCS </option>
            <option type="radio" value="BSIT" <?php if ($course == 'BSIT'){echo 'selected= "Selected"';} ?>> BSIT </option>
            <option type="radio" value="BSN"  <?php if ($course == 'BSN'){echo 'selected= "Selected"';}  ?>> BSN </option>
            <option type="radio" value="BSBA" <?php if ($course == 'BSBA'){echo 'selected= "Selected"';} ?>> BSBA </option>
            <option type="radio" value="BSA"  <?php if ($course == 'BSA'){echo 'selected= "Selected"';}  ?>> BSA </option>
            <option type="radio" value="CAS"  <?php if ($course == 'CAS'){echo 'selected= "Selected"';}  ?>> CAS </option>
            <option type="radio" value="CRT & CPT" <?php if ($course == 'CRT & CPT'){echo 'selected= "Selected"';} ?>> CRT & CPT </option>
        </select>
        <br>
        
        <tr>
        <td width="30%">Year Level: </span></td>
        <td width="70%">
        <br>
        <input type="radio" name="yearlevel" value="1" <?php if ($yearlevel == '1'){echo 'selected= "Checked"';} ?>> 1st
        <br>
        <input type="radio" name="yearlevel" value="2" <?php if ($yearlevel == '2'){echo 'selected= "Checked"';} ?>> 2nd
        <br>
        <input type="radio" name="yearlevel" value="3" <?php if ($yearlevel == '3'){echo 'selected= "Checked"';} ?>> 3rd
        <br>
        <input type="radio" name="yearlevel" value="4" <?php if ($yearlevel == '4'){echo 'selected= "Checked"';} ?>> 4th
        <br>
        </body>
        </tr>
                </tbody><tfoot>

                <td colspan="2"align="center"><input type="submit" value="EDIT">
    </form>
</thread>
</html>







