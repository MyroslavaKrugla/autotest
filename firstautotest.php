<?php
namespace Facebook\WebDriver;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

require_once('vendor/autoload.php');

$host = 'http://localhost:4444/wd/hub';

$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

$driver->navigate()->to('https://google.com');

$driver->wait(5, 1000)->until(
    WebDriverExpectedCondition::titleContains('Google')
);

$driver->wait(5);

sleep(5);

$driver->close();