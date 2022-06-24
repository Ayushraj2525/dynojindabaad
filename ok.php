<?php
 echo$ip_server = $_SERVER['SERVER_ADDR'];
function hack(){
$tk=$_GET['token'];
$rand = rand(712222,999999).rand(11100011,99958999); $url="https://api.mcontent.net/system/api/insertviews"; $data='{"userid":null,"video_id":"62a3de6bed'.$rand.'","views":"1","wallet_id":"","video_userid":"629ea78d95376255826b31f3","video_type":"mbrowse","transaction_type":"view","apikey":"7fbfdf5f-884f-4386-bf65-15f6592d9b69","countrycode":"IN"}'; $headers=array('Host: api.mcontent.net ','accept: application/json, text/plain, */* ','authorization: Bearer '.$tk.'','content-type: application/json ','accept-encoding: gzip ','user-agent: okhttp/4.9.1 ');
$ch1=curl_init(); curl_setopt($ch1, CURLOPT_URL,$url); curl_setopt($ch1, CURLOPT_PROXY, 'in.proxiware.com:22000');curl_setopt($ch1, CURLOPT_HEADER,0); curl_setopt($ch1, CURLOPT_HTTPHEADER,$headers); curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST,0); curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER,0); curl_setopt($ch1, CURLOPT_POST, 1); curl_setopt($ch1, CURLOPT_POSTFIELDS,$data); curl_setopt($ch1, CURLOPT_RETURNTRANSFER,TRUE); curl_setopt($ch1, CURLOPT_FOLLOWLOCATION,0); $one1=curl_exec($ch1); $json1=json_decode($one1,true); 	curl_close ($ch1); echo $one1; 
}
hack();

?>