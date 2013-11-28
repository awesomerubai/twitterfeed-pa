<?php
ini_set('display_errors', 1);
require_once('inc/twitter.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
  'oauth_access_token' => "294442882-NQ20RVim0srz8zcA3QPENm6tGP5DezSyEvJoBf8g",
  'oauth_access_token_secret' => "uD2J33bLVVqXQc0YSp0k8h6yxvBL1W8ACbLjKFyf7yVv4",
  'consumer_key' => "xZlRsGFjZDbHNWluhaBtw",
  'consumer_secret' => "hx4d9Cy9YrR9RIjOTdyVuoOhIyIx88ruK202glxNns4"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = '?q=#obama&result_type=recent&count=10';

// Perform the request
$twitter = new TwitterAPIExchange($settings);
$data = $twitter
  ->setGetfield($getfield)
  ->buildOauth($url, $requestMethod)
  ->performRequest();

header('Content-Type: application/json');
echo $data;

