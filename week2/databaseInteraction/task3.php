<?php
    include('database.php');
    // Get data from form
    $search_name = $_POST["search_name"];
    $query = "SELECT student_id, surname, forename, address, telephone, date_of_birth FROM Student WHERE forename LIKE '${search_name}'";
    $prepared = $conn->prepare($query);
    $prepared->execute();
    $result = $prepared->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="UTF-8">
    <title>Task 3 PHP</title>
</head>
<body>
<div class="container">
    <form method="post">
        <fieldset>
            <legend>Search Record</legend>
                <label for="search_name">First Name:</label>
                <input type="text" id="search_name" name="search_name">
                </br></br>
                <input type="submit" value="Search">
        </fieldset>
        </br></br>
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
    