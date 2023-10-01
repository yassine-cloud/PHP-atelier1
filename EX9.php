<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nombre divisible par 3 et/ou par 5</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="number" name="x" >
    

    <input type="submit" value="tester">

    </form>
    <?php  
        if(!empty($_POST["x"])){

            $a=$_POST["x"];

            /* // Method 1
            if($a % 5 == 0 || $a % 3 == 0){
                if($a % 5 == 0 && $a % 3 == 0)
                    echo "$a est divisible par 3 et 5";
                else{
                    if($a%5==0)
                        echo "$a est divisible par 5";
                    else
                        echo"$a est divisible par 3 ";
                }
            }
            else echo"$a n'est pas divisible ni par 3 ni par 5";
            */

            // Methode 2
            function test($var) : int
            {
                $x=($var % 5 == 0)?5:0;
                $x+=($var % 3 == 0)?3:0;
                return $x ; 
            }
            switch (test($a)) {
                case 0: echo"$a n'est pas divisible ni par 3 ni par 5";                    
                    break;
                case 3: echo"$a est divisible par 3";                    
                    break;
                case 5: echo"$a est divisible par 5";                    
                    break;
                case 8: echo"$a est divisible par 3 et 5";                    
                    break;
            }
            

        }
    ?>


      
</body>
</html>