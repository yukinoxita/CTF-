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
<p>在规定的时间内解题获取flag,并将解题步骤以word文档的形式记录下来</p>
<p>个人赛,不允许有相互讨论的情况</p>
<p><b>ps:题全是我自己出的，网上没有。别抱有幻想。</b></p>
<p>さあ、盛り上げいこうか！！！</p>
</div>
<div id="tesuto">
    <li><a href="1/index.php" id="link">第一关</a></li>
    <li><a href="2/index.php" id="link">第二关</a></li>
    <li><a href="3/index.php" id="link">第三关</a></li>
    <li><a href="4/index.php" id="link">第四关</a></li>
    <li><a href="5/index.php" id="link">第五关</a></li>
    <li><a href="6/index.php" id="link">第六关</a></li>
</div>
<p id="time"></p>
<script>
    document.getElementById('time').innerHTML = Date();
</script>
</body>
</html>
