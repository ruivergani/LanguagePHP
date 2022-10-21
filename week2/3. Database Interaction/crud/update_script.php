<?php
    include('database.php');

    if(isset($_GET['edit'])){
        $id= $_GET['edit'];
        $editData= edit_data($connection, $id);
    }

    if(isset($_POST['update']) && isset($_GET['edit'])){
        $id= $_GET['edit'];
        update_data($connection,$id);
    } 

    // Edit the Data
    function edit_data($connection, $id){
        $query= "SELECT * FROM Student WHERE student_id= $id";
        $exec = mysqli_query($connection, $query);
        $row= mysqli_fetch_assoc($exec);
        return $row;
    }

    // Update Data query
    function update_data($connection, $id){
        $student_id = legal_input($_POST['student_id']);
        $surname = legal_input($_POST['surname']);
        $forename = legal_input($_POST['forename']);
        $address = legal_input($_POST['address']);
        $telephone = legal_input($_POST['telephone']);
        $date_of_birth = legal_input($_POST['date_of_birth']);

        $query="UPDATE Student 
            SET student_id='$student_id',
                surname='$surname',
                forename= '$forename',
                address= '$address',
                telephone= '$telephone',
                date_of_birth='$date_of_birth' WHERE student_id=$id";

        $exec=mysqli_query($connection,$query);
        if($exec){
            header('location:user_table.php');
        }
        else{
            $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
            echo $msg;  
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