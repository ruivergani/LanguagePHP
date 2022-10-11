<?php
    // Include connection to database
    include("database.php");

    // Fetch Data from MySQL Table
    $db= $conn;
    $tableName="Staffordshire";
    $columns= ['student_id', 'surname','forename','address','telephone', 'date_of_birth']; // collums from the table
    $fetchData = fetch_data($db, $tableName, $columns);

    // This function accepts three parameters like $db, $table, $collum and contains MySQL SELECT query that will return records in array format from the database.
    function fetch_data($db, $tableName, $columns){
        if(empty($db)){
            $msg= "Database connection error";
        }
        elseif (empty($columns) || !is_array($columns)) {
            $msg="columns Name must be defined in an indexed array";
        }
        elseif(empty($tableName)){
            $msg= "Table Name is empty";
        }
        else{
            $columnName = implode(", ", $columns);
            $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
            $result = $db->query($query);

            if($result== true){ 
                if ($result->num_rows > 0) {
                    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg= $row;
                } 
                else {
                    $msg= "No Data Found"; 
                }
            }
            else{
                $msg= mysqli_error($db);
            }
        }
        return $msg;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="UTF-8">
    <title>Task 2 PHP Database</title>
</head>
<body>
<div class="container">
    <!-- Display Table with data from database -->

</div>
</body>
</html>