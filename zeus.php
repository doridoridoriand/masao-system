<?php
require 'simple_html_dom.php';

class ZEUS {

  public function urlReqester($accessrepeats, $targetURL) {
  	for ($i = 0; $i < $accessrepeats; $i++) {
  		  	$this->loadURL($targetURL);
  		  	sleep(10);
  		  	print_r($i);
  	}
  }
  private function loadURL($targetURL) {
  	$source = file_get_html($targetURL);
  }

  public function userAgenSelector($userAgentFlag) {
    if ($userAgentFlag == 'android') {
      return $android;
    } else {
      return $windowsphone;
    }
    //UserAgents
  	$android = 'Mozilla/5.0 (Linux; Android 4.1.1; Nexus 7 Build/JRO03D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Safari/535.19';
  	$windowsphone  = 'Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; NOKIA; Lumia 800)';

  	ini_set('user_agent', $android);
  }

  public function chiefManager($a, $b, $c) {
    $this->urlReqester($a, $c);
    $this->userAgenSelector($b);

  }
}

$zeus = new ZEUS;
//第一引数:アクセスする回数 第二引数:userAgentの種類(android or windowsphone) 第三引数:ターゲットのURL
$zeus->chiefManager($argv[1], $argv[2], $argv[3]);