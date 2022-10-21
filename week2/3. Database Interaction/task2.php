<?php
    // Include connection to database
    include("database.php");

    // Fetch Data from MySQL Table
    $db= $conn;
    $tableName="Student";
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
            $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY student_id DESC";
            $result = $db->query($query);

            if($result == true){ 
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg = $row;
                } 
                else {
                    $msg = "No Data Found"; 
                }
            }
            else{
                $msg = mysqli_error($db);
            }
        }
        return $msg;
    }
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Task 2 PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="col-sm-12 text-center mt-5">Fetch Data from MySQL Database</h1>
            <div class="col-sm-12 mt-5">
                <?php echo $deleteMsg??''; ?>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th>Student ID</th>
                        <th>Forename</th>
                        <th>Surname</th>
                        <th>Address</th>
                        <th>Telephone Number</th>
                        <th>Date of Birth</th>
                    </thead>
                    <tbody>
                        <?php
                            if(is_array($fetchData)){      
                                $sn=1;
                                foreach($fetchData as $data){
                        ?>
                            <tr>
                                <td><?php echo $data['student_id']??''; ?></td>
                                <td><?php echo $data['forename']??''; ?></td>
                                <td><?php echo $data['surname']??''; ?></td>
                                <td><?php echo $data['address']??''; ?></td>
                                <td><?php echo $data['telephone']??''; ?></td>
                                <td><?php echo $data['date_of_birth']??''; ?></td> 
                            </tr>
                            <?php
                                $sn++;}}else{ ?>
                                <tr>
                                    <td colspan="7">
                                <?php echo $fetchData; ?>
                            </td>
                                <tr>
                                <?php
                                }?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
</body>
</html>