<?php

namespace Controllers;

class Currency extends Controller
{

    public function curl()
    {

		$endpoint = 'latest';
		$access_key = 'e327b2fc28457c39731a338413b36ee1';


		$ch = curl_init('http://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


		$json = curl_exec($ch);

		
		curl_close($ch);



		$conversionResult = json_decode($json, true);

		return $conversionResult['rates']['UAH'];
    }
       
}