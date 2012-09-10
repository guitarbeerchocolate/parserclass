<?php
class parser
{
	function __construct()
	{

	}

	function htmlToText($html)
    {
        $html = preg_replace("'<style[^>]*>.*</style>'siU", '', $html);
        $search = array('@<script[^>]*?>.*?</script>@si', '@<[\/\!]*?[^<>]*?>@si', '@<style[^>]*?>.*?</style>@siU', '@<![\s\S]*?--[ \t\n\r]*>@');
        $text = preg_replace($search, '', $html);
        return $this->compress_output($text);
    }

    function compress_output($buffer)
    {

        $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
        $replace = array('>','<','\\1');
        $buffer = preg_replace($search, $replace, $buffer);
        return $buffer;
    }

	function __destruct()
	{
	
	}
}
?>