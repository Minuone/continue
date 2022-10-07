<?php 
//error_reporting(0);
if(isset($_SERVER["ACCEPT_LANGUAGE"]))
	{
		$alang=$_SERVER["ACCEPT_LANGUAGE"];

		if($alang=="AFANDA")
		{
			$msg ='flag:{the_Language_is_A_Fan_Da!}';
		}

	}

	else{
		$msg="Your language are not 阿凡达!";;
	}
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>good movie</title>
</head>
<body alink="#007000" bgcolor="#000000" link="gold" text="#008000" vlink="#00c000">
<center><?php  echo $msgs;?></center>
</html>







