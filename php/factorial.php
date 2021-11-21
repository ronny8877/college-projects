<?php  
function fact ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * fact($n - 1);  
    }  
}  

$number=39;
echo fact($number) . "\n";
$number=40;
 echo fact($number)  . "\n";
$number =(int)readline('Enter a number    ');
echo fact($number);
?>
