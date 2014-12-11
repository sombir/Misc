<?php
	echo $str = 'YmFzZTY0IGVuY29kZWQgc3RyaW5n';
	echo "<br/>";
	echo $decodedStr =  base64_decode($str);
	echo "<br/>";
	echo $encodedStr =  base64_encode($decodedStr);
?>
