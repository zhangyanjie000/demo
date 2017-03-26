<?php
   $callback = $_GET['callback'];//获取回调函数名
   $data = array['a','b','c'];//要返回的数据
   echo $callback.'('.(json_encode($data)).')';//输出
?>