<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body><?php
  $url1 = "https://rss.cbc.ca/lineup/canada-newfoundland.xml";
	
	$fp = fopen($url1, 'rb', false);


	echo "**********************************";
	$string = stream_get_contents($fp);

//echo strip_tags($string);
echo "<plaintext>" . $string . "</plaintext>";
	?>

	</script>
 </body>
</html>
