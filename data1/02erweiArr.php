<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    //    print_r($arr1);

    $num = 123;
    $float = 1.2;
    $str = 'hello';
    $flag = true;
    $v = null;
    $arr = array(1, 23, 3);

    echo gettype($num);
    echo "<br>";
    echo gettype($float);
    echo "<br>";
    echo gettype($str);
    echo "<br>";
    echo gettype($flag);
    echo "<br>";
    echo gettype($v);
    echo "<br>";
    echo gettype($arr);
    echo "<br>";
    echo "遍历数组";

    $arr1 = array(1,2,3,4,5,145,345,345,);
    //for ($i = 0; $i < count($arr1); $i++) {
    //    echo $arr1[$i]."<br>";
    //}
    echo "sdafjkhasdkjfhs<br>";
    echo "sdafjkhasdkjfhs<br>";
    echo "sdafjkhasdkjfhs<br>";
    echo "sdafjkhasdkjfhs<br>";
    echo "sdafjkhasdkjfhs<br>";
    foreach ($arr1 as $v){
        echo $v."<br>";
    }



    ?>

<?php
/*$urls= array('aaa','bbb','ccc','ddd');
for ($i= 0;$i< count($urls); $i++){
    $str= $urls[$i];
    echo "This Site url is $str.<br />";
}
//*/?>
</body>
</html>