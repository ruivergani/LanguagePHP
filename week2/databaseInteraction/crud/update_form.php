<?php
    include('update_script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD Operations</title>
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <p><?php if(!empty($msg)){echo $msg; }?></p>
            <fieldset>
                <legend>Update Record</legend>
                <!-- Student ID -->
                <label for="student_id">Student ID:</label>
                <input type="number" id="student_id" name="student_id" placeholder="Enter ID"
                required value="<?php echo isset($editData) ? $editData['student_id'] : '' ?>>
                <!-- Student Forename -->
                <label for="forename">Forename:</label>
                <input type="text" id="forename" name="forename" placeholder="Enter First Name" 
                value="<?php echo isset($editData) ? $editData['forename'] : '' ?>">
                <!-- Student Surname -->
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" placeholder="Enter Surname" 
                value="<?php echo isset($editData) ? $editData['surname'] : '' ?>">
                <!-- Student Address -->
                <label for="address">Address:</label>
                <textarea type="text" id="address" name="address" rows="4" cols="30" 
                value="<?php echo isset($editData) ? $editData['address'] : '' ?>">
                </textarea>
                <!-- Student Telephone -->
                <label for="telephone">Telephone:</label>
                <input type="text" id="telephone" name="telephone" placeholder="Enter Telephone" 
                value="<?php echo isset($editData) ? $editData['telephone'] : '' ?>">
                <!-- Student Date of Birth -->
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" 
                value="<?php echo isset($editData) ? $editData['date_of_birth'] : '' ?>">
                <!-- Create Button -->
                <input type="submit" value="Update" class="btn-secondary" name="update">
                
            </fieldset>
        </form>
    </div>
</body>
</html>