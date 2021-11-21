
<?php
function check($number){
    if($number % 2 == 0){
        echo "Even \n"; 
    }
    else{
        echo "Odd \n";
    }
}
$number=39;
check($number);
$number=40;
check($number);
$number =(int)readline('Enter a number    ');
check($number);
?>