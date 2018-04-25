<?php

require_once('LINEBotTiny.php');
require('pub.php');

$channelAccessToken = 'rxrT4emHTKZeCDN4pdozuupbWzZt67Da+k7w019mujt/wrs+6BF1y7vQg44lrTwwTr/VcoEAYrHO+Lgylq32RlPv6HoALCQbfNLZRz2CmFxLzwAHlsz07dZmPcfj08ifmcnH74bNNNcm7dbstjr4qgdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'fa2bd15c0c656b56fadfbbedbc1341f5';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':

                    getMqttfromlineMsg($message['text']);
                    $mixmsg = '[BOT] > '. $message['text'];

                    $client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
                            array(
                                'type' => 'text',
                                'text' => $mixmsg
                            )
                        )
                    ));
                    break;
                default:
                    error_log("Unsupporeted message type: " . $message['type']);
                    break;
            }
            break;
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};
echo "1212312121";
?>

