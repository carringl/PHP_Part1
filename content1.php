<?php
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>content1.php</title>";
    echo "</head>";
    echo "<body>";

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['value'] = 0;
    $_SESSION['value'] += 1;
    if(($_SESSION['username'] == null) || ($_SESSION['username'] == " ")){
       echo "A username must be entered. click <a href= 'login.php'> here</a> to return to the login screen.";}
    else{
        echo 'Hello,' .  $_SESSION["username"] . ', you have visited this page ' .  $_SESSION["value"] . ' times. </br>';
        echo 'click <a href= "login.php"> here ' . session_unset() . session_destroy() . '</a> to logout. </br>';
        echo "click <a href= 'content2.php'> here </a> to go to content page 2!";}


    echo "</body>";
    echo "</html>";
