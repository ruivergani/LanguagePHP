<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../css/style.css">
    <meta charset="UTF-8">
    <title>Add Student to Database</title>
</head>
<body>
    <div class="container">
        <form name="frmUser" method="post" action="">
            <section class="message"><?php if(isset($message)) { echo $message; } ?></section>
            <fieldset>
                <legend>Add Record</legend>
                <!-- Student ID -->
                <label for="student_id">Student ID:</label>
                <input type="number" id="student_id" name="student_id">
                <!-- Student Forename -->
                <label for="forename">Forename:</label>
                <input type="text" id="forename" name="forename">
                <!-- Student Surname -->
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname">
                <!-- Student Address -->
                <label for="address">Address:</label>
                <textarea type="text" id="address" name="address" rows="4" cols="30">
                </textarea>
                <!-- Student Telephone -->
                <label for="telephone">Telephone:</label>
                <input type="text" id="telephone" name="telephone">
                <!-- Student Date of Birth -->
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth">
                <input type="submit" value="Add Student" class="btn-secondary">
            </fieldset>
        </form>
    </div>
</body>
</html>