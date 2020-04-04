<?php
//echo "home.php";

$user = $_GET['user'];
if(!isset($user))
{
    echo "<script>alert('爷拒绝你的非法请求');</script>";    
    echo "<script>window.location.href='index.php'</script>";
}
/*验证是否存在*/
$servername = "localhost";
$username = "root";
$password = "123456";
$conn = new mysqli($servername, $username, $password);
$conn->select_db("start");
//echo "<br>user=".$user."<br>pass=".$pass;
$sql = "select beizhu from user where username='$user'";
$result = $conn->query($sql);
if($result->num_rows === 0)
{
    echo "<script>alert('爷拒绝你的非法请求');</script>";    
    echo "<script>window.location.href='index.php'</script>";
    
}
/*===========*/
echo "<style>"; 
echo "p{"; 
echo "font-size:40px;"; 
echo "}"; 
echo "</style>";
echo "<p>user : ".$user."</p>";
echo "<p>就这么多东西了，臭弟弟自己找去。</p>";
echo "<p>还有啊，天下武功</p>";
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
p.nb
{
    font-size:20px;    
}
</style>
</head>
<body>
<div id="reg">
<h1>提交密码即可编辑签名<h1>
<form action="moto.php" method="post" id="exec">
<input type="password" name="password" placeholder="密码"><br>
<input type="submit" value="编辑">
</form>
<p>===============</p>
<h1>忘记密码？</h1>
<p class="nb">看在你这么搞笑的份上给你一个修改密码的机会</p>
<form action='change.php' method="post" id="exec" onsubmit="return check(this)">
<input type="password" name="password" placeholder="新密码"><br>
<input type="submit" value="修改">
</form>
</div>
<p id="fuck"></p>
<script>
function check(form)
{
    var user = "<?php echo $user?>";               
    if(user == 'admin')
    {
        alert('还想偷偷修改admin密码?');    
        alert('给爷爬');
        return false;
    }
    return true;
    //document.getElementById('fuck').innerHTML = user;
}
</script>
</body>
</html>
