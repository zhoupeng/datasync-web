<html>
    <head>
        <title>Example</title>
    </head>
    <body>
	<?php
	$MyArray1 = array("子", "丑", "寅", "卯");
	$MyArray2 = array(
        	"地支" => array("子", "丑", "寅", "卯"),
              	"生肖" => array("鼠", "牛", "虎", "兔"),
              	"数字" => array(1, 2, 3, 4)
            	);
		?>

	<?php
	echo $MyArray1[0];
	echo $MyArray2['地支'][3];
 	?>

        <?php
        echo "<p>Hi, I'm a PHP script!</p>";
        echo "<p>Hi, I'm a PHP script!</p>";
        ?>

	<?php
	// 本程序使用 $GLOBALS 数组
	function myfunc() {
		echo $GLOBALS["PHP_SELF"];
	}
	myfunc();
	echo $GLOBALS["PHP_SELF"];
	global $PHP_SELF;
	echo $PHP_SELF;
	?>

	<?php
	// 静态变量的例子
	function myfunc_static_v() {
  	static $mystr;
  	$mystr.="哈";
  	echo $mystr."<br>\n";
	}
	myfunc_static_v();   // 哈
	myfunc_static_v();   // 哈哈
	myfunc_static_v();   // 哈哈哈
	?>

	<?php
	// 不是静态变量的例子 (错误的)
	function myfunc_local_v() {
  		$mystr.="哈";
  		echo $mystr."<br>\n";
	}
	myfunc_local_v();   // 哈
	myfunc_local_v();   // 哈
	myfunc_local_v();   // 哈
	?>

	<?php
	function TdBackColor() {
		static $ColorStr;
		if ($ColorStr=="808080") {
    		$ColorStr="c0c0c0";
  		} else {
    		$ColorStr="808080";
 	 	}
  		return($ColorStr);
	}
	echo "<table border=2>\n";
	for ($i=0; $i<10; $i++) {
  		$ColorStr = TdBackColor();
  		echo "<tr><td bgcolor=".$ColorStr.">这是第".$i."行</td> <td>table data ......</td></tr>\n";
	}
	echo "</table>";
	?>

	<?php
	/* PHP 的变量使用技巧上，最令人觉得不可思议的则是变量的变量 
	(variable variable)。这是充分利用 PHP 特性玩出的特殊技巧 */
	$a = "Hello";
	$$a = "world";
	echo "$a, $Hello<br>";   // Hello, world
	echo "$a, {$$a}<br>";    // 也是 Hello, world

	function myCallbackFunction()
	{
		print("Hello from callback");
	}

	function myFunction($callback)
	{
		$callback();
	}
	// call to myFunction passing callback
	// function as parameter
	myFunction("myCallbackFunction");
	?>

	<?php //phpinfo(); ?>
    </body>
</html>
