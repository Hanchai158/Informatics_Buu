<?php
$access_token = 'dy/8j+pADzR3FfCFKCKkedrZCrndEDGgy8TnBTR6z8iZmDgQcsWqaRHUQ+IP7HDU3Y305/YTgLhnWTCJAZBcvVK1j5XTIBj77ZFdpOKGLFXF+6TCC1xItsbbn+CKqC4TCz7pxAU2u6fTd2UdEL8/JAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
