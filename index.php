<script>
    function getLinkJSONloaitamgiac() {
        var a,b,c;
        a = document.getElementById("inputa").value;
        b = document.getElementById("inputb").value;
        c = document.getElementById("inputc").value;
        window.open("api-tamgiac.php/checkloaitamgiac/"+a+"/"+b+"/"+c);
    }
    function getLinkJSONngayketiep() {
        var a,b,c;
        a = document.getElementById("inputday").value;
        b = document.getElementById("inputmonth").value;
        c = document.getElementById("inputyear").value;
        window.open("api-ngayketiep.php/checkngayketiep/"+a+"/"+b+"/"+c);
    }
    function getData()
    {
        document.getElementById("txt_apijsonpt2").innerHTML = window.location.host +"/ptb2-php/api-tamgiac.php/checkloaitamgiac/a/b/c";
        document.getElementById("txt_apijsonngayketiep").innerHTML = window.location.host +"/ptb2-php/api-ngayketiep.php/checkngayketiep/day/month/year";
    }
</script>
<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <title>Thực Hành Công Nghệ Thông Tin 3 Nguyễn Hải Bằng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Kiểm Tra Dạng tam Giác</h1>
<a>a,b,c</a>
<form>
    <label for="fname">a</label><br>
    <input type="number" id="inputa" name="fname"><br>
    <label for="lname">b</label><br>
    <input type="number" id="inputb" name="lname"><br>
    <label for="lname">c</label><br>
    <input type="number" id="inputc" name="lname"><br>
    <input type ="button" name="OKE" value="Phan loai" onclick="getLinkJSONloaitamgiac()">
</form>
<h3>API</h3><h4 id="txt_apijsonpt2"></h4>
<h1>Kiểm Tra Ngày Tiếp Theo</h1>
<form>
    <label for="lname">Nhập ngày</label><br>
    <input type="number" id="inputday" name="lname"><br>
   <label for="lname">Nhập tháng</label><br>
    <input type="number" id="inputmonth" name="lname"><br>
   <label for="lname">Nhập năm</label><br>
    <input type="number" id="inputyear" name="lname"><br>
    <input type ="button" name="OKE" value="Ngay ke tiep" onclick="getLinkJSONngayketiep()">
</form>
<h3>API </h3><h4 id="txt_apijsonngayketiep"></h4>
<script>getData();</script>
</body>
</html>
