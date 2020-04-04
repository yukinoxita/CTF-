<html>
<head>
<title>排行榜</title>
<style>
body
{
    background:grey;    
}
h1
{
    text-align:center;
    font-size:60px;
    color:red;
}
div
{
    border:1px inset blue;
    background-color:#00ffff;    
    margin-right:300px;
    margin-left:300px;
}
table,th,td
{
    border:1px solid red;
}
#rank
{
    margin:0 auto;     
    font-size:50px;
}
</style>
</head>
<body>
<h1>排行榜</h1>
<div>
<table id="rank">
<tr>
<td>排名</td>
<td>姓名</td>
<td>得分</td>
</tr>
<?php
$mysql_name = "localhost";
$mysql_user = "root";
$mysql_pass = "123456";
$mysql_db   = "user";
$conn = new mysqli($mysql_name,$mysql_user,$mysql_pass);
$conn->select_db($mysql_db);

$sql = "select rank,name,point from info";
$conn->query("SET NAMES UTF8");
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $cnt = 0;
    while($row=$result->fetch_assoc())
    {
        $cnt = $cnt+1;
        $rank  = $row['rank'];
        $name  = $row['name'];
        $point = $row['point'];
        echo "<tr>";
        echo "<td>$cnt</td>";
        echo "<td>$name</td>";
        echo "<td>$point</td>";
        echo "</tr>";
    }
}

?>
</table>
</div>
<script>setTimeout("location=location; ", 5000); </script>
</body>
</html>
