<?php
$user = $_POST['username'];
$pass = $_POST['passwd'];

//echo "user = ".$user."<br>passwd = " . $pass;
$servername = "localhost";
$username = "root";
$password = "123456";
$conn = new mysqli($servername, $username, $password);
$conn->select_db("start");

$sql = "select username,passwd,beizhu from user where username='$user'";
$conn->query("SET NAMES UTF8");
$result = $conn->query($sql);
/*style*/
echo "<style>";
echo "p{";
echo "font-size:40px;";
echo "}";
echo "</style>";
echo "<!--flag{This_is_the_6th__flag}-->";
//echo $result->num_rows;
if($result->num_rows == 0)
{
    echo "<p><b>输入的密码或用户名有误</b></p><br>";
    echo "<p>两秒钟之内自动返回</p>";
    echo "<script>window.location.href='index.php'</script>";
}
else
{
    $row = $result->fetch_assoc();

    if($row['passwd'] !== $pass)
    {
        echo "<p><b>密码有误</b></p>";
        echo "<p>两秒钟之后自动返回</p>";
        echo "<script>window.location.href='index.php'</script>";
    }
    echo "登陆成功<br>";
    echo "嘿嘿嘿";
    //echo "<input type='text' name='user'><br>";
    echo "<script>window.location.href='home.php?user=".$user."'</script>";
    //弹窗上面，get请求 转到自己的主页 
}
?>
<html>
<body>
</body>
</html>
