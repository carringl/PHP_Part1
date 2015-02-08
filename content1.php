<?php
    session_start();
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>content1.php</title>";
    echo "</head>";
    echo "<body>";

    if(($_POST['username'] == null) && ($_SESSION['username'] == null)){
        echo "Please post a valid username click <a href= 'login.php' > here </a> to go back.";
        header ('Location: login.php');}
    else{

    if($_SESSION['value'] >= 0){
       $_SESSION['value'] += 1;}


    if ($_POST['username'] != null){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['value'] = 0;}

    echo 'Hello,' .  $_SESSION["username"] . ', you have visited this page ' .  $_SESSION["value"] . ' times. </br>';
    echo 'click <a href= "login.php"> here </a> to logout. </br>';
    echo "click <a href= 'content2.php'> here </a> to go to content page 2!";}

    echo "</body>";
    echo "</html>";
