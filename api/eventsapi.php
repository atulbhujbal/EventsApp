<?php
// Request the response in JSON format using the .json extension


switch ($_REQUEST["action"]) {
	case 'allevents':
		$url = 'http://api.eventfinder.com.au/v2/events.xml?';//$_REQUEST['url'];
		$param="rows=".$_REQUEST['rows']."&fields=".$_REQUEST['fields'];	
		reqEvents($url,$param);
		break;
	
	case 'eventDetails':
		$url = 'http://api.eventfinder.com.au/v2/events.xml?';//$_REQUEST['url'];
		$param="id=".$_REQUEST['id'];	
		reqEvents($url,$param);
		break;

	default:
		# code...
		break;
}

function reqEvents($url,$param)
{
	//$url = 'http://api.eventfinder.com.au/v2/events.xml?';//$_REQUEST['url'];
	//$param = 'rows=20&fields=event:(name,id,address,images),image:(is_primary,transforms)';//$_REQUEST['param'];
	$url = $url.$param;
	$username = "eventsaroundyou";
	$password = "dksvrtzfqmrd";
	$process = curl_init($url);
	curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
	curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
	$return = curl_exec($process);

	$xml = simplexml_load_string($return,'SimpleXMLElement', LIBXML_NOCDATA);
	$json = json_encode($xml);
	strip_cdata($json);
	$count = null;
	$json = preg_replace('/\\\\/', '', $json, -1, $count);
	echo $json;
}

function strip_cdata($string) 
{ 
    preg_match_all('/<!\[cdata\[(.*?)\]\]>/is', $string, $matches); 
    return str_replace($matches[0], $matches[1], $string); 
} 
?>