<?php
	header("Content-type: text/html; charset=utf-8");
	//连库、择库、设定字符集
	mysql_connect('localhost', 'root', '123');
	mysql_select_db('info');
	mysql_query('set names utf8');
	//发指令、取数据
	$query = mysql_query('select * from fruitshop');

	//$arr = mysql_fetch_object($query);
	
	//print_r($arr);
	
	while($arr = mysql_fetch_object($query)){
		echo $arr->name;
		echo "<br />";
	}
	
	//echo $arr->name;
	//echo $arr->name;


?>