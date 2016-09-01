<?php

define('MY_APP', dirname(__FILE__) . DIRECTORY_SEPARATOR);

require_once(MY_APP . 'facebook-php-sdk-master' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'facebook.php');

$facebook = new Facebook(array(
	'appId'  => '629832573840909',
	'secret' => '0de5b11540adbef4573ac140b9c998d5',
));

$arrFbOpts = array(
	'redirect_uri' => 'http://localhost/face/access.php',
	'scope' => array('email,user_birthday')
);

$user = $facebook->getUser();

if ($user) 
{
  try 
  {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
    var_dump($user_profile);
  } 
  catch (FacebookApiException $e) {
    var_dump($e);
  }
}

