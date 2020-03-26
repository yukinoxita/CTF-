<?php
if ($_FILES["file"]["error"] > 0)
{
    echo "错误：" . $_FILES["file"]["error"] . "<br>";
}
else
{
    $name = $_FILES["file"]["name"];
    $path =  $_FILES["file"]["tmp_name"];
    
    $file = fopen($path,"r");
    $content = fread($file,"2048");
    fclose($file);
    $file = fopen("upload/".$name,"w");
    echo "<style>";
    echo "p{";
    echo "font-size:40px;";
    echo "}";
    echo "</style>";
    if(fwrite($file,$content))
    {
        echo "<p>上传成功</p>";
        echo "<p>上传路径为:upload/" . $name . "</p>";
    }
    else
        echo "<p>上传失败</p>";
}
?>

