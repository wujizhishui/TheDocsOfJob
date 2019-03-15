<?php
/**
 * 冒泡排序
 * @authors Joker (njfupl@foxmail.com)
 * @date    2017-08-12 19:39:13
 * 基本思想:每次比较两个相邻得数,如果两个数的顺序与要求的顺序相反就将他们换过来;
 * 缺点:非常耗时间;
 */
header("content-type:text/html;charset=utf8");
echo "这是冒泡排序--升序";
echo "<pre>";

$arr=[23,345,67,798,0,45,78,890,0,34,567,789,89,345,678,890,90,465,4564,6767,4353,2345,456,67,567,567,678,89,90,90,345,345,45,8789,788903,45345,52,34,4567,567,678,568,90];


// echo count($arr),"<br>";
for ($i=0; $i < count($arr)-1; $i++) { 
	// 外循环,循环的总次数就是数组长度减一次
	for ($j=0; $j < count($arr)-1-$i; $j++) { 
		// 内循环,在每次外循环下循环,每次的循环次数是数组长度减去外循环的第几次数;
		// 第一次外循环就要进行数组长度减一次内循环,以此循环下去
		if ($arr[$j]>$arr[$j+1]) {
			// $tmp = 0;
			$tmp = $arr[$j+1];
			$arr[$j+1] = $arr[$j];
			$arr[$j] = $tmp;
		}
	}
}
// var_dump($arr);die;
foreach ($arr as $v) {
	echo $v,"<br>";
}
