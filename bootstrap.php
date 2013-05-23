<?php

/**
 * FuelPHP Amazon Web Service SES Package
 *
 * Email Class Wrapper for AWS SES
 *
 * @package    fuel-awsses
 * @author     Tatsuya Ueda
 */

Autoloader::add_classes(
	array(
		'Email\\Email_Driver_Awsses' => __DIR__ . '/classes/email/driver/awsses.php',
));

