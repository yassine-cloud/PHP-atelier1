<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nombre pair ou non</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="number" name="x" >
    

    <input type="submit" value="Valider">

    </form>
    <?php  
        if(!empty($_POST["x"])){
            $a=$_POST["x"];
            echo ($a % 2 == 0)?  "Nombre pair" : "Nombre impair" ;
        }
    ?>


      
</body>
</html>