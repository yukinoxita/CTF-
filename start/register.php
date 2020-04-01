<?php
/*连接数据库*/
$servername = "localhost";                                                                              
$username = "root";
$password = "123456";
$conn = new mysqli($servername, $username, $password);
$conn->select_db("start");
/*输入的数据,判断一下是否为null*/
$user = $_POST['username'];
$pass = $_POST['password'];
$beiz = $_POST['beizhu'];//
if(($user !== '') && ($pass !== '') && ($beiz !== ''))
{
    //echo "user=".$user."<br>pass=".$pass."<br>beiz=".$beiz;
    $sql = "select username from user where username='$user'";
    $conn->query("SET NAMES UTF8");
    $result = $conn->query($sql);
    if($result->num_rows != 0)
    {
        echo "<script>window.alert('该用户已存在');</script>";
        echo "<script>window.location.href='register.html'</script>";
    }
    else
    {
        //这个地方绝对有注入
        $sql = "insert into user values('$user','$pass','$beizhu')";
        if($conn->query($sql) === TRUE)
        {
            echo "<script>window.alert('注册成功');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
        else
        {
            echo "<script>window.alert('注册失败，未知错误，请重试');</script>";
            echo "<script>window.location.href='register.html'</script>";
        }
    }   
}
else
{
    echo "<script>window.alert('所有输入都不能为空');</script>";
    echo "<script>window.location.href='register.html'</script>";
}

?>
