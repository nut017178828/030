<?php
$access_token = 'ZdPPZ2hnB34bK6dAAGLQVOTUc7eDXkSiPwXL8GTgEFc8O1MwReboNZhDSif7kqDqTr/VcoEAYrHO+Lgylq32RlPv6HoALCQbfNLZRz2CmFxEqpuXxsOcSPLpPX36lobBx1wWR6PAEvB/sT4coBjGigdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, )
