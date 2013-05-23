<?php

/**
 * FuelPHP Amazon Web Service SES Package
 *
 * Email Class Wrapper for AWS SES
 *
 * @package    fuel-awsses
 * @author     Tatsuya Ueda
 */

//Autoloader::add_namespace('aws-', __DIR__ . '/classes/');

Autoloader::add_classes(
	array(
		'AwsSes\\Email_Driver_AwsSes' => __DIR__ . '/classes/email/driver/awsses.php',
));

