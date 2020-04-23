ightness_4
<?php 
// PHP program to check if three 
// sides form a triangle or not 
  
// function to check if three sider 
// form a triangle or not 
function checkValidity($a, $b, $c) 
{ 
      
    // check condition 
    if ($a + $b <= $c || 
        $a + $c <= $b ||  
        $b + $c <= $a) 
        return false; 
    else
        return true; 
} 
  
    // Driver Code 
    $a = 7;  
    $b = 10; 
    $c = 5; 
      
    if (checkValidity($a, $b, $c)) 
        echo "Valid"; 
    else
        echo "Invalid"; 
          
// This code is contributed by nitin mittal. 
?> 
