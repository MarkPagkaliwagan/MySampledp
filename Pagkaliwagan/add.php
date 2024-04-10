<!DOCTYPE html>
<html>
<head>
<title>Add StudentsL</title>
</head>
<body>
<div>
            <a href='index.php'>HOME</a>
            <form id="theform" method="post" action="insert.php">
            <table width="60%" border="1">
                <thead align="center">
                    <th colspan="2"> Add</th>
                </thead>
                <tbody>

                    <tr>
                    <td width="30">First Name : </td>
                    <td width="70%"><input type="text" name="firstname" maxlength="50">
                    </tr>

                    <tr>
                    <td width="30">Middle Name: </td>
                    <td width="70%"><input type="text" name="middlename" maxlength="50">
                    </tr>

                    <tr>
                    <td width="30">last Name  : </td>
                    <td width="70%"><input type="text" name="lastname" maxlength="50">
                    </tr>


                    <tr>
                    <td width="30%">Course    : </span></td>
                    <td width="70%">
                    <select name="course">
                        <option VALUE="BSCS">BSCS</option>
                        <option VALUE="BSIT">BSIT</option>
                        <option VALUE="BSA">BSA</option>
                        <option VALUE="BSED">BSBA</option>
                        <option VALUE="BSCS">BSN</option>
                        <option VALUE="BSIT">CED</option>
                        <option VALUE="BSA">CAS</option>
                        <option VALUE="BSED">CRT & CPT</option>
                    </select>
                    </td>
                    </tr>


                    <tr>
                    <td width="30%">Year Level   : </span></td>
                    <td width="70%">
                        <input type="radio" name="yearlevel" value="1"> 1st
                        <input type="radio" name="yearlevel" value="2"> 2st
                        <input type="radio" name="yearlevel" value="3"> 3st
                        <input type="radio" name="yearlevel" value="4"> 4st
                    </td>

                    </tr>
                </tbody><tfoot>

                <td colspan="2"align="center"><input type="submit" value="submit">
</body></html>


            

