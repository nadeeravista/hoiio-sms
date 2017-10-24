# Laravel package for Hoiio SMS

### Installing

Installation using composer:

```
composer require "kalahe/hoiio-sms 2.1"
```

And add the service provider in config/app.php:

```
Kalahe\HoiioSms\HoiioSmsServiceProvider::class,
```

## Testging sms

```
// E.g. Sending SMS
require 'hoiio-php/Services/HoiioService.php';

$h = new HoiioService("myAppID", "myAccessToken");
$txnRef = $h->sms("+651111111", "hello world");
print("SMS sent successfully. TxnRef: $txnRef\n");

// E.g. Building IVR
require 'hoiio-php/Services/HoiioService.php';

$h = new HoiioService("myAppID", "myAccessToken");
$notify = $h->parseIVRNotify($_POST);
$session = $notify->getSession();
$key = $notify->getDigits();

$h->ivrPlay($session, '', "You just pressed $key.");
```

### Break down into end to end tests

Explain what these tests test and why

```
 $h = new HoiioService("7bTCRcg1Ce8HGBSR", "HFbmZYfljcVWewiG");
 $txnRef = $h->sms("+6587258194", "Hi rain");
```

## Built With

* [Documentation and Details](https://github.com/Hoiio/hoiio-php) - Original Hoiio repo

