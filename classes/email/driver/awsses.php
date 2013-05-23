<?php

/**
 * FuelPHP Amazon Web Service SES Package
 *
 * Email Class Wrapper for AWS SES
 *
 * @package    fuel-awsses
 * @author     Tatsuya Ueda
 */

class Email_Driver_AwsSes extends \Email_Driver {

	static protected $ses = null;
	static protected $defaults = null;
	
	static public function _init(){
		
		\Config::load('awsses', true);
		static::$defaults = \Config::get('awsses.defaults');
		
		if (static::$dynamodb === null) {
			$awsconfig = array(
				'key' => \Config::get('awsses.defaults.key'),
				'secret' => \Config::get('awsses.defaults.secret'),
			);
			
			$aws = \Aws\Common\Aws::factory($awsconfig);
		}
		
	}

}
