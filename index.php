<html>
<head></head>
<h1>
    Test GIT by Cevig lol
    Test GIT by Cevig Krasava
</h1>
<p> So hasl</p>
<p> So hasl from storm</p>
<P>Lalaka</P>
<p>Ozozel'</p>
</html>
<?php
$url = $_SERVER['REQUEST_URI'];
var_dump($url = array_filter(explode('/',$url)));
echo current($url);
var_dump($url = array_slice($url,1));
echo current($url);
var_dump($url = array_slice($url,1));
echo current($url);
?>