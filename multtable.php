<?php
echo "<!DOCTYPE html>"; 
echo "<html>";
echo "<head>";
    echo "<title>Multiplication Table Creator</title>";
    echo "<link rel= 'stylesheet' type= 'text/css'";
    echo "href = 'http://web.engr.oregonstate.edu/~carringl/php_test.css'";
echo "</head>";

echo "<body>";
    
    echo "<h1> Multiplication Tables </h1>";
    echo "<h3> Enter a set of integers  and see a multiplication table appear. </h3> ";
    echo "<p> All decimal numbers will be automatically calculated into an integer (rounded down) </p>";
    echo "<form method= 'GET'>";
	    echo "<input type= 'number' name ='min-multiplicand' placeholder = 'min-multiplicand' > </br>";
            echo "<input type= 'number' name ='max-multiplicand' placeholder = 'max-multiplicand'> </br>";
            echo "<input type = 'number' name = 'min-multiplier' placeholder = 'min-multiplier'></br>";
	    echo "<input type = 'number' name = 'max-multiplier' placeholder = 'max-multiplier'></br>";
            echo "<input type='submit'>";
    echo "</form>";
    
    $num1= $_GET['min-multiplicand'];
    $num2= $_GET['max-multiplicand'];
    $num3= $_GET['min-multiplier'];
    $num4= $_GET['max-multiplier'];
        
    if(($num1 == null) || ($num2 == null) || ($num3 == null) || ($num4 == null)){
        echo "please enter a valid number set and click submit </br>";
    	if($num1 == null){
            echo "please input a value into min-multiplicand </br>";}
    	if($num2 == null){
            echo "please input a value into max-multiplicand </br>";}
    	if($num3 == null){
            echo "please input a value into min-multiplier </br>";}
    	if($num4 == null){
            echo "please input a value into max-multiplier </br>";}}
    else{
    
    if(ctype_digit($num1) == false) {
	echo "Error: min-multiplicand is not an integer. </br>";  	
        if(is_numeric($num1) == true) {
            echo "converting to integer... </br>";
            $num1 = intval($num1);}
        elseif (ctype_digit($num1) == false) {
            echo "ERROR, cannot convert to integer.";
            return;}}
    elseif(ctype_digit($num1) == true){
        echo "</br>";}
    

    if(ctype_digit($num2) == false) {
        echo "Error: max-multiplicand is not an integer. </br>";
        if(is_numeric($num2) == true){
            echo "converting to integer... </br>"; 
            $num2 = intval($num2);}
        elseif(ctype_digit($num2) == false){
            echo "ERROR: cannot convert to integer";
            return;}}
    elseif(ctype_digit($num2) == true) {
        echo "</br>";}
    
    if(ctype_digit($num3) == false) {
        echo "Error: min-multiplier is not an integer </br>";
        if(is_numeric($num3) == true){
            echo "converting to integer... </br>";
            $num3 = intval($num3);}
        elseif(ctype_digit($num3) == false) {
            echo "ERROR: cannot convert to integer";
            return;}}
    elseif(ctype_digit($num3) == true) {
        echo "</br>";}

    if(ctype_digit($num4) == false) {
        echo "Error: max-multiplier is not an integer. </br>";
        if(is_numeric($num4) == true){
            echo "converting to integer... </br>";
            $num4 = intval($num4);}
        elseif(ctype_digit($num4)==false) {
            echo "ERROR: cannot convert to integer.";
            return;}}
    elseif(ctype_digit($num4) == true) {
        echo "</br>";}
    
    if($num1 > $num2) {
        echo "Error: Minimum multiplicand is larger than maximum... switching values. </br>";
        $tmp = $num1;
        $num1 = $num2;
        $num2 = $tmp;}

    if($num3 > $num4) {
        echo "Error: Minimum multiplier is larger than maximum... switching values. </br>";
        $tmp = $num3;
        $num3 = $num4;
        $num4 = $tmp;}
      
       
    $rowArray = array();
        for ($i = $num1; $i < ($num2+1); $i++){
            $rowArray[] = $i;}
       
    $columnArray = array();
        for($i = $num3; $i < ($num4+1); $i++) {
            $columnArray[] = $i;}
 
    echo "<table>";
    echo "<tr>";
    echo "<td>   </td>";
    foreach($rowArray as $value){
        echo "<td> $value </td>";}
        echo "</tr>";
        foreach($columnArray as $valueC){
            echo "<tr>";
            echo "<td> $valueC </td>"; //sets the first column
            foreach($rowArray as $valueR){
            $product = ($valueC * $valueR);
            echo "<td> $product </td>";
        }
        echo "</tr>";
    }
    echo "</table>";}
   
    unset($num1);
    unset($num2);
    unset($num3);
    unset($num4);
    unset($multiplicand);
    unset($multiplier);
    unset($rowArray);
    unset($columnArray); 		

echo "</body>";
echo "</html>"; ?>
