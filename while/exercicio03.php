<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../_css/estilo.css">
    <meta charset="UTF-8"/>
    <title>

    </title>
</head>
<body>
<div>
    <?php
        $i = isset($_GET["in"])?$_GET["in"]:0;
        $f = isset($_GET["fi"])?$_GET["fi"]:0;
        $e = isset($_GET["esc"])?$_GET["esc"]:1;
        if($i<=$f){
            while($i<=$f){
                echo "$i ";
                $i += $e;
            }
        }
        elseif($i>=$f){
            while($i>=$f){
                echo "$i ";
                $i -= $e;
            }
        }
    ?>
    </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>﻿