<?php

namespace Controllers;

class Currency extends Controller
{

    public function curl()
    {

		$endpoint = 'latest';

		$access_key = getenv('API_KEY');
		$url = getenv('HOST_NAME');


		$ch = curl_init($url . $endpoint . '?access_key=' . $access_key.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


		$json = curl_exec($ch);

		
		curl_close($ch);



		$conversionResult = json_decode($json, true);

		return $conversionResult['rates']['UAH'];
    }
       
}