<?php

?>
<html>
<head>
<title>
テストへようこそ
</title>
<style>
h1{font-size:50px;}
p{font-size:30px;}
a#link 
{
    font-size:40px;    
    color:red;
}
#time
{
    text-align:center;    
    color:red; 
}
#tesuto
{
 //   text-align:center;    
 // 别看了，这里没有提示，啥都没有。
}
</style>
</head>
<body>
<div>
<h1>规则</h1>
<p>さあ、盛り上げいこうか！！！</p>
</div>
<div id="tesuto">
    <li><a href="rank.php" id="link">排行榜</a></li>
    <li><a href="1/index.php" id="link">第一关</a></li>
    <li><a href="2/index.php" id="link">第二关</a></li>
    <li><a href="3/index.php" id="link">第三关</a></li>
    <li><a href="4/index.php" id="link">第四关</a></li>
    <li><a href="5/index.php" id="link">第五关</a></li>
    <li><a href="6/index.php" id="link">未完待续</a></li>
</div>
<p id="time"></p>
<script>
    document.getElementById('time').innerHTML = Date();
</script>
</body>
</html>
