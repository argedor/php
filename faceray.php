<?php

class Faceray
{
	public $url = 'http://159.69.86.20/faceray/imgupload';
	public $apiKey = '1';
	public $apiId = '1';	
	public $yourImageUrl = null;

	public function client()
	{
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$this->url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array());
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "apitxt=age3&imgurl=".$this->yourImageUrl);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        return $server_output ;
	}
}

$faceray = new Faceray();
$faceray->apiId = '1';
$faceray->apiKey = '1';
$faceray->yourImageUrl = 'http://159.69.86.20/faceray/images/test.jpg';
$response = $faceray->client();
echo $response;
?>