<?php
$access_token = '/wV+2XHFvZRJf9yiUZnNzcqtGDqkeY8S45SrHl8jG+qWt94A9Ew1/CMHZNM9ADSUBGXWQ5nGCJjncaR/ZcbpAuHhHVjpxdzqJx9wRiSNYuYNuSscnYvyQr1lO/593sFSpCTDZp6j1Ve5twUUmG3txQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
