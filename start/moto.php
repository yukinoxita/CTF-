<?php
$ip = $_SERVER['HTTP_REFERER'];
echo $ip;
$user = explode('=',$ip);
$user = $user[1];
?>
<html>
<head>
<title>查看个性签名</title>
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
<h1>提交密码<h1>
<form action="#" method="post" id="exec">
<input type="password" name="password" placeholder="密码"><br>
<input type="submit" value="修改">
</form>
</div>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$conn = new mysqli($servername, $username, $password);
$conn->select_db("start");
$pass = $_POST['password'];
echo "<br>user=".$user."<br>pass=".$pass;
$sql = "select beizhu from user where username='$user' and passwd='$pass'";

?>
