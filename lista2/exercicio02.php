<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio 01</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <?php
        $a=$_POST["a"];
        $b=$_POST["b"];
        $c=$_POST["c"];

        if($a>=$b && $a>=$c){
	      $maior=$a;

	     if($b>=$c){
		   $meio=$b;
		   $menor=$c;
	    }
        else{
    	$meio=$c;
		$menor=$b;
        }
      }
       if($b>=$a && $b>=$c){
	   $maior=$b;

	   if($a>=$c){
		$meio=$a;
		$menor=$c;
	   }
	   else{
		$meio=$c;
		$menor=$a;
	   }
       }
	  if($c>=$a&& $c>=$b){
	   $maior=$c;
	  if($a>=$b){
		$meio=$a;
		$menor=$b;
	  }
	  else{
		$meio=$b;
		$menor=$a;
	  }
      }
      else{
}
      echo "$menor , $meio , $maior";
?>
</div>
</body>
</html>
