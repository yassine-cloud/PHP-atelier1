<?php
function display_menu() : void {
    /*echo "<a href='EX2.php' target='_blank' rel='noopener noreferrer'>Exercice 2</a><br>
    <a href='EX3.php' target='_blank' rel='noopener noreferrer'>Exercice 3</a><br>
    <a href='EX4.php' target='_blank' rel='noopener noreferrer'>Exercice 4</a><br>
    <a href='EX5.php' target='_blank' rel='noopener noreferrer'>Exercice 5</a><br>
    <a href='EX6.php' target='_blank' rel='noopener noreferrer'>Exercice 6</a><br>
    <a href='EX7.php' target='_blank' rel='noopener noreferrer'>Exercice 7</a><br>
    <a href='EX8.php' target='_blank' rel='noopener noreferrer'>Exercice 8</a><br>
    <a href='EX9.php' target='_blank' rel='noopener noreferrer'>Exercice 9</a><br>
    <a href='EX10.php' target='_blank' rel='noopener noreferrer'>Exercice 10</a>";*/

    echo '<ul>';
    for ($i = 1; $i <= 10; $i++) {
        echo '<li><a href="EX'.$i.'.php">Exercice '.$i.'</a></li>';
    }
    echo '</ul>';
}