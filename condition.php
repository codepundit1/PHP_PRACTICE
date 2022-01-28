<?php
$age;

function ageCal($age){
    if($age >= 18){
        echo "Student can register for corona vaccine";
    }else{
        echo "Invalid";
    }
}

ageCal(88);

?>

<br>
<?php

function numberFinder($num1,$num2){
   
    if($num1<$num2){
        echo "num1 is small number";
    }
    elseif($num1>$num2){
        echo "num1 is big number";
    }
    else
        echo "both are same";
}
numberFinder(100, 100);

?>

<br>

<?php

$result;
$d = date("D");
         
switch ($d){
   case "Mon":
      echo "Today is Monday";
      break;
   
   case "Tue":
      echo "Today is Tuesday";
      break;
   
   case "Wed":
      echo "Today is Wednesday";
      break;
   
   case "Thu":
      echo "Today is Thursday";
      break;
   
   case "Fri":
      echo "Today is Friday";
      break;
   
   case "Sat":
      echo "Today is Saturday";
      break;
   
   case "Sun":
      echo "Today is Sunday";
      break;
   
   default:
      echo "Wonder which day is this ?";

}


?>