<?php
require_once 'classes/parser.class.php';
$p = new parser;
$s = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Template page</title>
<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css" />
<style>
body
{
	font-family:Sans-serif;
	line-height:1.5em;
}
</style>
<script src="http://www.google.com/jsapi"></script>
<script>
	google.load("jquery", "1");
	google.load("jqueryui", "1");
</script>
</head>
<body>
<header><h1>Header 1</h1></header>
<section id="mainContent">
	<p>Hello World!</p>
</section>
<footer>Footer</footer>
<script>
(function()
{
		
})();
</script>
</body>
</html>';
echo $p->htmlToText($s);
?>