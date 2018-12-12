<?php
include_once './autoload.php';
$app_key = '';
$app_secret = '';
$oauthToken = '';      //twitter第三方登录成功后，重定向后会带此参数  https://developer.twitter.com/en/docs/twitter-for-websites/log-in-with-twitter/guides/implementing-sign-in-with-twitter
$oauthTokenSecret = '';//twitter第三方登录成功后，重定向后会带此参数
$authObj = new Abraham\TwitterOAuth\TwitterOAuth($app_key,$app_secret,$oauthTokenSecret);
$response = $authObj->get("account/verify_credentials");
print_r($response);