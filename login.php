<?php
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
    
    session_start(); 
    header('location:content1.php');     
        
    echo "</body>";
    echo "</html>";
?>
