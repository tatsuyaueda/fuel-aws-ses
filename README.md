fuel-awsses
============
FuelPHP package for AWS SES.

Requirement
===========
AWS PHP SDK v2

How to use
==========
Copy 'fuelphp-awsses' directory and all included files to fuel/packages.  
Copy config/awsses.php into your APPPATH/config.  
Modify awsses.php with your AWS developer key/secret key.  

Example
=======
```php
$email = Email::forge(array('driver' => 'awsses'));
$email->from('from@example.jp', '差出人名');
$email->to('to@example.jp', '送信先名');
$email->cc('cc@example.jp');
$email->bcc('bcc@example.jp');
$email->subject('これはタイトルです。');
$email->body('これは本文です。');
$email->send();
```
