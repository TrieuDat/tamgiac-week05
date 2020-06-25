<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    <h1>Kiểm tra loại tam giác</h1>
    <form action="loaiTamGiac.php" method="get">
        <label>a</label><br/>
        <input type="text" name="a"><br/>
        <label>b</label><br/>
        <input type="text" name="b"><br/>
        <label>c</label><br/>
        <input type="text" name="c"><br/>
        <br>
        <input type="submit" name="dapan" value="Kết quả">
        
    </form>
    <h1>Tính ngày kế tiếp</h1>
    <form action="ngayKeTiep.php" method="get">
        <label>Nhập ngày</label><br/>
        <input type="text" name="day"><br/>
        <label>Nhập tháng</label><br/>
        <input type="text" name="month"><br/>
        <label>Nhập năm</label><br/>
        <input type="text" name="year"><br/>
        <br>
        <input type="submit" name="Caculate2" value="Kết quả" >
        
    </form>
</body>
</html>

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
  echo "a = 2<br>";
  echo "b = 3<br>";
  echo "c = 4<br>";
    // Driver Code 
    $a = 2;  
    $b = 3; 
    $c = 4; 
      
    if (checkValidity($a, $b, $c)) 
        echo "La Tam Giac"; 
    else
        echo "Khong La Tam Giac"; 
          
// This code is contributed by nitin mittal.
