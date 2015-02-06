<?php 
echo "<html>";
echo "<head>";
    echo "<title>Intro to PHP</title>";
    echo "<link rel= 'stylesheet' type= 'text/css'";
    echo "href = 'http://web.engr.oregonstate.edu/~carringl/php_test.css'";
echo "</head>";

echo "<body>";
    
    echo "<h1> Multiplication Tables </h1>";
    echo "<h3> Enter a set of integers  and see a multiplication table appear. </h3> ";
    echo "<p> All decimal numbers will be automatically calculated into an integer (rounded down) </p>";
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
    $counter=0 ;
    
    if(($num1 == null) || ($num2 == null) || ($num3 == null) || ($num4 == null)){
        echo "please enter a valid number set and click submit </br>";}
    
    if(is_numeric($num1) == true) {
        $num1 = intval($num1);}
    else{
        echo "Error: min-multiplicand is not an integer. </br>";}
    
    if(is_numeric($num2) == true){
        $num2 = intval($num2);}
    else{
        echo "Error: max-multiplicand is not a integer. </br>";}
    

    if(is_numeric($num3) == true){
        $num3 = intval($num3);}
    else{  
        echo "Error: min-multiplier is not a integer. </br>";}
    
    if(is_numeric($num4) == true){
        $num4 = intval($num4);}
    else{
        echo "Error: max-multiplier is not a integer. </br>";}
    
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
    echo "</table>";
   
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
