<?php
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
  echo "a = 2"
  echo "b = 3"
        echo "c=4"
    // Driver Code 
    $a = 2;  
    $b = 3; 
    $c = 4; 
      
    if (checkValidity($a, $b, $c)) 
        echo "La Tam Giac"; 
    else
        echo "Khong La Tam Giac"; 
          
// This code is contributed by nitin mittal. 
