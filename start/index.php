<html>
<head>
<title>隐藏关卡</title>
<style>
h1
{
    font-size:40px;
    text-align:center;
}
p.shokai
{
    font-size:30px;
    text-align:center;
}
#exec
{
    font-size:40px;    
    text-align:center;
}                   
#login
{
    border:solid grey;
    margin:100px;    
    margin-left:500px;
    margin-right:500px;
}
input
{
    font-size:45px;    
}
</style>
</head>
<body>
<h1>老套的后台登陆系统</h1>
<p class="shokai">
恭喜你找到了这个隐藏关卡，正如第五关所说:
<br>
终点亦是开始。
来试一试吧
</p>

<div id="login">

<form action="check.php" method="post" id="exec">
<input type="text" name="username" value="用户名"><br>
<p></p>
<input type="text" name="passwd" value="密码"><br>
<input type="submit" value="登陆">
</div>
</body>
</html>
