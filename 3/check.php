<?php

$a = $_POST['ask'];
echo $a;
$mysql_name = "localhost";
$mysql_user = "root";
$mysql_pass = "123456";
$mysql_db   = "test";
$conn = new mysqli($mysql_name,$mysql_user,$mysql_pass);
$conn->select_db($mysql_db);

$sql = "select name,idnum,class from userinfo where num = '$a' limit 0,1";
$conn->query("SET NAMES UTF8");
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
        $info =  $row['name'] . " " . $row['idnum'] . " " . $row['class'];    
}
else
    $info="查 无 此人";
?>

<html>
<head>
<title>第三题</title>
<style>
p
{
    font-size:40px;
    text-align:center;
}
h1
{
    font-size:60px;
    text-align:center;
}
table,th,td
{
    font-size:60px;
    border:1px solid black;
}
</style>
</head>
<body>
<h1>查询结果</h1>
<div>
<table  align="center">
<tr>
<th>name</th>
<th>idnum</th>
<th>class</th>
</tr>
<tr>
<th id="one"></th>
<th id="two"></th>
<th id="three"></th>
</tr>
<p id="kekka"></p>
</table>
</div>
<script>
    var info =  "<?php echo $info?>";
    info = info.split(' ');
    document.getElementById('one').innerHTML = info[0];
    document.getElementById('two').innerHTML = info[1];
    document.getElementById('three').innerHTML = info[2];
    //document.getElementById('kekka').innerHTML = info;
</script>
</body>
</html>
