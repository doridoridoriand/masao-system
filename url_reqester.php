<?php
require 'simple_html_dom.php';

class urlReqester {

  public function zeus() {
  	for ($i = 0; $i < 10000; $i++) {
  		  	$this->loadURL();
  		  	sleep(10);
  		  	print_r($i);
  	}
  }
  public function loadURL() {
  	$source = file_get_html('http://mery.jp/45265');
  }

  public function userAgenSelector() {
  	$android = 'Mozilla/5.0 (Linux; Android 4.1.1; Nexus 7 Build/JRO03D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Safari/535.19';
  	$windowsphone  = 'Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; NOKIA; Lumia 800)';
  	ini_set('user_agent', $android);

  }
}


$urlReqester = new urlReqester;
$urlReqester->userAgenSelector();
$urlReqester->zeus();