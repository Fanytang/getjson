<?php
	//设置返回值为json
header('content-type:application/json;charset=utf-8');
//读取Json文件返回数据
echo file_get_contents('../jd.json');

?>