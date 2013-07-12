<?php
// Request the response in JSON format using the .json extension
//$url = 'http://api.eventfinder.com.au/v2/events.json?rows=3';
//$url = 'http://api.eventfinder.com.au/v2/events.xml?rows=3&fields=event:(url,name)';
$url = 'http://api.eventfinder.com.au/v2/events.xml?';//$_REQUEST['url'];
$param = 'rows=20&fields=event:(name,id,address,images),image:(is_primary,transforms)';//$_REQUEST['param'];
$url = $url.$param;
$username = "eventsaroundyou";
$password = "dksvrtzfqmrd";
$process = curl_init($url);
curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
$return = curl_exec($process);

$xml = simplexml_load_string($return);
$json = json_encode($xml);
strip_cdata($json);
$count = null;
$json = preg_replace('/\\\\/', '', $json, -1, $count);
echo $json;

/*
foreach($xml as $event)

{
	//echo "NAME :".$event->name."<br/>";
	$name = $event->name;
	
	echo $name;
}*/

function strip_cdata($string) 
{ 
    preg_match_all('/<!\[cdata\[(.*?)\]\]>/is', $string, $matches); 
    return str_replace($matches[0], $matches[1], $string); 
} 
?>