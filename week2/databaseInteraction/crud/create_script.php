<?php
    // Add the database file connection
    include('database.php');

    if(isset($_POST['create'])){
        $msg=insert_data($connection);
    }

    // Insert Query Data into MySQL
    function insert_data($connection){
        $student_id = legal_input($_POST['student_id']);
        $surname = legal_input($_POST['surname']);
        $forename = legal_input($_POST['forename']);
        $address = legal_input($_POST['address']);
        $telephone = legal_input($_POST['telephone']);
        $date_of_birth = legal_input($_POST['date_of_birth']);
        
        // Query Database
        $query="INSERT INTO Student (student_id, surname, forename, address, telephone, date_of_birth) VALUES ('$student_id','$surname','$forename','$address', '$telephone', '$date_of_birth')";
        $exec= mysqli_query($connection,$query);
        if($exec){
            $msg="Data was created sucessfully";
            return $msg;
        }
        else{
            $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
        }
    }

    // Convert illegal input to legal input
    function legal_input($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
?>