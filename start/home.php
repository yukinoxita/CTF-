<?php
//echo "home.php";

$user = $_GET['user'];
echo "<style>"; 
echo "p{"; 
echo "font-size:40px;"; 
echo "}"; 
echo "</style>";
echo "<p>user : ".$user."</p>";
echo "<p>就这么多东西了，臭弟弟自己找去。</p>";
?>
<html>
<head>
<title>个人主页</title>
<style>
#exec
{
    font-size:40px;    
    text-align:center;
}
#reg
{
    text-align:center;    
    border:solid grey;
    margin:100px;    
    margin-left:500px;
    margin-right:500px;
}  
</style>
</head>
<body>
<div id="reg">
<h1>提交密码即可编辑签名<h1>
<form action="moto.php" method="post" id="exec">
<input type="password" name="password" placeholder="密码"><br>
<input type="submit" value="修改">
</form>
</div>
</body>
</html>
