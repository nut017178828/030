<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'fa2bd15c0c656b56fadfbbedbc1341f5';
$access_token  = 'rxrT4emHTKZeCDN4pdozuupbWzZt67Da+k7w019mujt/wrs+6BF1y7vQg44lrTwwTr/VcoEAYrHO+Lgylq32RlPv6HoALCQbfNLZRz2CmFxLzwAHlsz07dZmPcfj08ifmcnH74bNNNcm7dbstjr4qgdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
