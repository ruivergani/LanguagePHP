<?php
    include('read_script.php');
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
        <form name="frmUser" method="post" action="">
            <p><?php if(!empty($msg)){echo $msg; }?></p>
            <fieldset>
                <legend>Read Record</legend>
                <table border="1" cellspacing="0" cellpadding="10">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Date of Birth</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        if(count($fetchData)>0){
                        $sn=1;
                        foreach($fetchData as $data){   
                    ?>
                     <tr>
                        <td><?php echo $data['student_id']; ?></td>
                        <td><?php echo $data['forename']; ?></td>
                        <td><?php echo $data['surname']; ?></td>
                        <td><?php echo $data['address']; ?></td>
                        <td><?php echo $data['telephone']; ?></td>
                        <td><?php echo $data['date_of_birth']; ?></td>
                        <td><a style="color: blue;"  href="update_form.php?edit=<?php echo $data['student_id']; ?>">Edit</a></td>
                        <td><a style="color: red;"  href="delete_script.php?delete=<?php echo $data['student_id']; ?>">Delete</a></td>
                    </tr>
                    <?php
                        $sn++; }
                        }else{
                    ?>
                    <tr>
                        <td colspan="7">No Data Found</td>
                    </tr>      
                    <?php
                    }
                    ?>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>