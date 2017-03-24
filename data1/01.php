<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        var json = {"name":"zhangshang","age":12};
        // console.log(JSON.parse(json));
           for (var k in json ){
              console.log(k);
          }
    </script>
</head>
<body>
<?php
echo "<h1>php内容的一个标题</h1>";
$num = 123;
echo "<h2>字符串拼接：". $num ." </h2>";
echo "<h2>字符串拼接：$num </h2>";
$json = array("name","zhangshang","age","12");
print_r($json);
var_dump($json);
$json1 = array("name"=>"zhangshang","age"=>"12");
print_r($json1);
var_dump($json1);
print_r($num);
var_dump($num);


?>

</body>
</html>