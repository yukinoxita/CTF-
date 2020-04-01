<?php
$ip = $_SERVER['HTTP_REFERER'];                                                                         
//echo $ip; 
$user = explode('=',$ip);
$user = $user[1];
$pass = $_POST['password'];
//echo "user=".$user."<br>pass=".$pass;

/*连接数据库*/
$servername = "localhost";
$username = "root";
$password = "123456";
$conn = new mysqli($servername, $username, $password);
$conn->select_db("start");
$conn->query("SET NAMES UTF8");
//$sql = "select username,passwd from user where"
$sql = "update user set passwd='$pass' where username='$user'";
if($conn->query($sql) === TRUE)
{
    echo "<script>alert('修改成功,再忘密码头给你揍掉');</script>";
    echo "<script>window.location.href='home.php?user=".$user."'</script>";
}
else
{
    echo "<script>alert('未知错误,你重新登陆一下吧');</script>";
    echo "<script>window.location.href='index.php'</script>";
}



?>
