<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tirage aleatoire </h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    FROM <input type="number" name="a" >
    TO
    <input type="number" name="b" >
    
    <br>

    <input type="submit" value="Tirage">

    </form>
    <?php  
        if(!empty($_POST["a"]) && !empty($_POST ["b"])){
            $a=$_POST["a"];
            $b=$_POST["b"];
            if($a >= $b /*|| abs($a - $b) < 2*/){
                echo "<script> alert('Error in your input values');</script>";
            }
            else {
                do {
                    $x=rand($a,$b);
                } while ($x%2!=0);
                echo "Value = $x";
            }
        }
    ?>


      
</body>
</html>