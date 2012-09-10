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
        return $text;
    }

	function __destruct()
	{
	
	}
}
?>