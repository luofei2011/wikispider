<?php
header("Content-Type:text/html;charset=utf-8");

//$url = 'http://zh.wikipedia.org/wiki/%E6%B0%B4%E6%9E%9C%E5%88%97%E8%A1%A8';
$url = 'http://zh.wikipedia.org/wiki/%E4%B8%AD%E5%9B%BD%E5%9F%8E%E5%B8%82%E5%88%97%E8%A1%A8';
//$url = 'http://en.wikipedia.org/wiki/List_of_U.S._states';
//$url = 'http://en.wikipedia.org/wiki/List_of_countries_by_GDP_(PPP)';
//$url/// = 'http://en.wikipedia.org/wiki/List_of_elements';
//$url = 'http://www.shanghairanking.com/FieldSCI2012.html';
//$url = 'http://en.wikipedia.org/wiki/List_of_Presidents_of_the_United_States';
//$url = 'http://en.wikipedia.org/wiki/List_of_films_that_won_the_Golden_Globe_and_the_Oscar_for_Best_Picture';
//$url = 'http://zh.wikipedia.org/wiki/%E4%B8%AD%E5%9B%BD%E4%B8%96%E7%95%8C%E9%81%97%E4%BA%A7';
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,1000);
$dxycontent = curl_exec($ch);
echo $dxycontent;
?>
