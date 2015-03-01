<?
$postdata = '{"deck_id": "core"}';
$ch = curl_init("https://api-sandbox.traitify.com/v1/assessments");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC ) ; 
curl_setopt($ch, CURLOPT_USERPWD, "e8tgas6sb5v7ssj3dq6jcc2n3p:x"); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
echo "$data";
?>