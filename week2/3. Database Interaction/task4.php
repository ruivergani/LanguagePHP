<?php
    include('database.php');
    // Get data from the form
    $student_id = $_POST["student_id"];
    $surname = $_POST["surname"];
    $forename = $_POST["forename"];
    $address = $_POST["address"];
    $telephone = $_POST["telephone"];
    $date_of_birth = $_POST["date_of_birth"];

    // Get data from the MySQL Table to display later
    $query = "SELECT student_id, surname, forename, address, telephone, date_of_birth FROM Student";
    $prepared = $conn->prepare($query);
    $prepared->execute();
    $result = $prepared->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="UTF-8">
    <title>Task 4 PHP</title>
</head>
<body>
<div class="container">
    <form method="post">
        <fieldset>
            <legend>New Record</legend>
                <label for="student_id">Student ID:</label>
                <input type="number" id="student_id" name="student_id">
                </br></br>
                <label for="forename">First Name:</label>
                <input type="text" id="forename" name="forename">
                </br></br>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname">
                </br></br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
                </br></br>
                <label for="telephone">Telephone:</label>
                <input type="text" id="telephone" name="telephone">
                </br></br>
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth">
                </br></br>
                <input type="submit" value="Create Record">
        </fieldset>
        </br></br>
        <?php
            // Performing insert query execution
            // here our table name is Student
            $sql = "INSERT INTO Student VALUES ('$student_id',
            '$surname','$forename','$address','$telephone', '$date_of_birth')";
                
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";

                echo nl2br("\n$student_id\n $surname\n "
                    . "$forename\n $address\n $telephone\n $date_of_birth");
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }

        ?>
        </br></br></br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Student ID</th>
                <th>Forename</th>
                <th>Surname</th>
                <th>Address</th>
                <th>Telephone Number</th>
                <th>Date of Birth</th>
            </tr>
            <?php
                if ($result->num_rows > 0) {
                $sn=1;
                while($data = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $data['student_id']??''; ?></td>
                    <td><?php echo $data['forename']??''; ?></td>
                    <td><?php echo $data['surname']??''; ?></td>
                    <td><?php echo $data['address']??''; ?></td>
                    <td><?php echo $data['telephone']??''; ?></td>
                    <td><?php echo $data['date_of_birth']??''; ?></td> 
                <tr>
            <?php
                $sn++;}
                } else { 
            ?>
                <tr>
                <td colspan="6">No data found</td>
                </tr>
            <?php } ?>
        </table>
    </form>
</div>
</body>
</html>
    