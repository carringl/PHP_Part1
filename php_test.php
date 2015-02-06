<?php 
echo "<html>";
echo "<head>";
    echo "<title>Intro to PHP</title>";
echo "<head>";

echo "<body>";

    echo "<form method= 'GET'>";
	    echo "min-multiplicand <input type= 'number' name ='MIN_MULT'> </br>";
            echo "max-multiplicand <input type= 'number' name ='MAX_MULT'> </br>";
            echo "min-multiplier <input type = 'number' name = 'MIN_MULTIPLIER'></br>";
	    echo "max-multiplier <input type = 'number' name = 'MAX_MULTIPLIER'></br>";
            echo "<input type='submit'>";
    echo "</form>";
    
    $num1= $_GET['MIN_MULT'];
    //echo $num1."\n";
    $num2= $_GET['MAX_MULT'];
    //echo $num2."\n";
    $num3= $_GET['MIN_MULTIPLIER'];
    //echo $num3."\n";
    $num4= $_GET['MAX_MULTIPLIER'];
    //echo $num4."\n";
    if($num1 > $num2){
        echo "invalid multiplicand number set";}
    elseif($num3 > $num4){
        echo "invalid multiplier number set";}
    elseif(($num1 == null) || ($num2 == null) || ($num3 == null) || ($num4 == null)){
        echo "please enter a valid number set and click submit";} 
    else{
        echo "input accepted";}

    //with the form done now I need to do the following items
    //determine the array of numbers in multiplicand and in multiplier
    $multiplicand = ($num2 - $num1 + 1);
    $multiplier = ($num4 - $num3 + 1);
    //echo "$multiplicand </br>";
    //echo "$multiplier </br>";
 
    $rowArray = array(null);
        $rowArray[] = " ";
        for ($i = $num1; $i < ($num2 + 1); $i++){
            $rowArray[] = $i;}
       
    $columnArray = array(null);
        $columnArray[] = " "; 
        for($i = $num3; $i < ($num4 + 1); $i++) {
            $columnArray[] = $i;}
 
    //foreach ($rowArray as $value)
    //    echo "$value </br>";  

    //echo "</br> </br>";

    //foreach ($columnArray as $value)
    //    echo "$value </br>";
    
    //concat the multiplicand and the multipliers together into table strings
    // sets first row
    echo "<table>";
    echo "<tr>";
    foreach($rowArray as $value){
            echo "<td> $value </td>";}
    echo "</tr>";
    // sets all rows after the first
    /*for($i = 1; $i < $multiplicand; $i++;){
        echo "<tr>";
        echo "<td> $columnArray[i] </td>";
       
        for($j = 1; $j < $multiplier; $j++){
            $product = ($rowArray[i] * $columnArray[i]);
            echo "<td> $product </td>";
       }
        echo "</tr>";
    } 
    */echo "</table>";
   
    //put multiplicands on rows
    //put multipliers on tables
    //multiply rows and columns 

    unset($num1);
    unset($num2);
    unset($num3);
    unset($num4);
    unset($multiplicand);
    unset($multiplier);
    unset($rowArray);
    unset($columnArray); ?>		

</body>
</html>
