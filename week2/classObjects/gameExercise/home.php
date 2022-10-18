<?php
    // Create Objects 5 Games

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Game Exercise</title>
</head>
<body>
    <div class="container">
        <form name="frmGame" method="post" action="">
            <p><?php if(!empty($msg)){echo $msg; }?></p>
            <fieldset>
                <!-- Listar table com 5 games (ORDER BY SALES) -->
                <table border="1" cellspacing="0" cellpadding="10">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Publisher</th>
                        <th>Sales</th>
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
                            <td><a style="color: blue;"  href="update.php?edit=<?php echo $data['student_id']; ?>">Edit</a></td>
                            <td><a style="color: red;"  href="remove.php?delete=<?php echo $data['student_id']; ?>">Delete</a></td>
                        </tr>
                    <?php
                            $sn++; 
                        }
                        }
                        else{
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