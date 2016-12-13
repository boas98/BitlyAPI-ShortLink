<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShortenController extends Controller
{
    public function index(Request $r)
    {
    	if (session('url') != "") {
    		\Session::forget('url');
    	}
    	return view('shorten');
    }

    public function getUrl(Request $r)
    {
    	$shorten = $r->input('url');
    	if (strpos($shorten, 'http://') !== false) {
    	} else {
    		$shorten = 'http://'.$shorten;
    	}
    	$url = env('API_URL');
    	$curl = new \Curl\Curl();

    	$curl->get('http://api-ssl.bitly.com/v3/shorten', array(
    		'login' => 'boas17'),
    		'apiKey' => ('R_3ff54f81f6424e25ae2b2ec966098ae8'),
    		'longUrl' => $shorten,
    		'format' => 'json'
    	));
      // dd( $curl);
      // die();

    	if ($curl->error) {
    		die("Error: ".$curl->error_code);
    	} else {
    		$json = json_decode($curl->response);
    	}

      dd($json);

    	$url = $json->data->url;
    	\Session::put('url', $url);
    	return view('shorten');
    }
}
