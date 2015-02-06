<?php 
echo "<html>";
echo "<head>";
    echo "<title>Intro to PHP</title>";
    echo "<link rel= 'stylesheet' type= 'text/css'";
    echo "href = 'http://web.engr.oregonstate.edu/~carringl/php_test.css'";
echo "</head>";

echo "<body>";
    
    echo "<h1> Multiplication Tables </h1>";
    echo "<h3> Enter a set of numbers and see a multiplication table appear. </h3> ";
    echo "<form method= 'GET'>";
	    echo "<input type= 'number' name ='MIN_MULT' placeholder = 'min-multiplicand' > </br>";
            echo "<input type= 'number' name ='MAX_MULT' placeholder = 'max-multiplicand'> </br>";
            echo "<input type = 'number' name = 'MIN_MULTIPLIER' placeholder = 'min-multiplier'></br>";
	    echo "<input type = 'number' name = 'MAX_MULTIPLIER' placeholder = 'max-multiplier'></br>";
            echo "<input type='submit'>";
    echo "</form>";
    
    $num1= $_GET['MIN_MULT'];
    $num2= $_GET['MAX_MULT'];
    $num3= $_GET['MIN_MULTIPLIER'];
    $num4= $_GET['MAX_MULTIPLIER'];
    
    //if($num1 > $num2){
        //echo "invalid multiplicand number set";}
    //elseif($num3 > $num4){
        //echo "invalid multiplier number set";}
    if(($num1 == null) || ($num2 == null) || ($num3 == null) || ($num4 == null)){
        echo "please enter a valid number set and click submit </br>";}
    elseif(is_numeric($num1) == false) {
        echo "Error: min-multiplicand is not a number. </br>";}
    elseif(is_numeric($num2) == false){
        echo "Error: max-multiplicand is not a number. </br>";}
    elseif(is_numeric($num3) == false){
        echo "Error: min-multiplier is not a number. </br>";}
    elseif(is_numeric($num4) == false){
        echo "Error: max-multiplier is not a number. </br>";}
    elseif($num1 > $num2) {
        echo "Error: Minimum multiplicand is larger than maximum. </br>";}
    elseif($num3 > $num4) {
        echo "Error: Minimum multiplier is larger than maximum. </br>";}      
    else{
        echo "input accepted";
   
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
