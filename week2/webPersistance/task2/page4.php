<?php
    include('./page1.php');
    include('./page2.php');
    include('./page3.php');
    
 ?>
<html>
<head>
<title>Page 4</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
            <!-- Page 4 -->
            <h4>Display all the information</h4>
            <!-- Hidden form concept -->
            <input type="text" value="<?= $name; ?>" name="name_hidden">
        </form>
    </div>
</body>
</html>