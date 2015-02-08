<?php
    session_start();
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>content1.php</title>";
    echo "</head>";
    echo "<body>";
    if($_SESSION['username'] == null){
        echo "Please enter a valid username in the login screen by clicking <a href= 'login.php' > here </a>.";
        header ('Location: login.php');}
    else{
    echo "Welcome to page 2. click <a href= 'content1.php'> here </a> to go back to page 1 </br>";        
    echo 'Welcome ' . $_SESSION['username'] . ' howdy.';}
    echo "</body>";
    echo "</html>";
