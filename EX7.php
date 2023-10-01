<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="number" name="a" >
    <=>
    <input type="number" name="b" >

    <input type="submit" value="comparer">

    </form>
    <?php  
        if(!empty($_POST["a"]) && !empty($_POST ["b"])){
            $a=$_POST["a"];
            $b=$_POST["b"];
            echo "le resultat : ".($a<=>$b);
        }
    ?>


      
</body>
</html>