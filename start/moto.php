<?php
$ip = $_SERVER['HTTP_REFERER'];
echo $ip;
$user = explode('=',$ip);
$user = $user[1];

$servername = "localhost";
$username = "root";
$password = "123456";
$conn = new mysqli($servername, $username, $password);
$conn->select_db("start");
$pass = $_POST['password'];
echo "<br>user=".$user."<br>pass=".$pass;
$sql = "select beizhu from user where username='$user' and passwd='$pass'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    $ans = $row['beizhu'];
    //echo "ans=".$ans."<br>";
    echo "<script>alert('".$ans."');</script>";    
    echo "<script>alert('还想改备注？先充个百八十万再说吧');</script>";    
    echo "<script>window.location.href='home.php?user=".$user."'</script>";
}
else
{
    echo "<script>alert('用户或密码错误');</script>";    
    echo "<script>window.location.href='home.php?user=".$user."'</script>";
}

?>
