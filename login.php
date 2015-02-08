<?php
    session_start();
    echo "<!DOCTYPE html>";
    echo "<head>";
    echo "<title> login.php </title>";
    echo "</head>";

    echo "<body>";
    echo "Enter Your Username here";
    echo "<form method = 'POST' action = 'content1.php' >";
    echo "<input type = 'text' name = 'username'></br>"; 
    echo "<input type = 'submit' name = 'submit'>";
    echo "</form>";

    if($_SESSION['value'] > 0){
        session_unset();
        session_destroy();} 
        
    echo "</body>";
    echo "</html>";
?>
