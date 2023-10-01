<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="number" name="x" >
    +
    <input type="number" name="y" >

    <input type="submit" value="calculer">

    </form>
    <?php  
        if(!empty($_POST["x"]) && !empty($_POST ["y"])){
            $a=$_POST["x"];
            $b=$_POST["y"];
            echo "le resultat de la somme est : ".$a+$b;
        }
    ?>


      
</body>
</html>