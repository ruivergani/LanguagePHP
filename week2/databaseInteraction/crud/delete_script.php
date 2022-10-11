<?php
    include("database.php");
    if(isset($_GET['delete'])){
        $id= $_GET['delete'];
        delete_data($connection, $id);
    }

    // Delete data query
    function delete_data($connection, $id){
        $query="DELETE from Student WHERE student_id=$id";
        $exec= mysqli_query($connection,$query);
        if($exec){
            header('location:user_table.php');
        }else{
            $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
            echo $msg;
        }
    }
?>