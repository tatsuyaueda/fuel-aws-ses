<?php

/**
 * FuelPHP Amazon Web Service SES Package
 *
 * Email Class Wrapper for AWS SES
 *
 * @package    fuel-awsses
 * @author     Tatsuya Ueda
 */

namespace Email;

use Aws\Ses\SesClient;

class Email_Driver_Awsses extends \Email_Driver {

	static protected $ses = null;
	static protected  $defaults = null;

	/**
	 * Init Method
	 */
	static public function _init() {

		\Config::load('awsses', true);
		static::$defaults = \Config::get('awsses.defaults');

		if (static::$ses === null) {
			$awsconfig = array(
				'key' => \Config::get('awsses.defaults.key'),
				'secret' => \Config::get('awsses.defaults.secret'),
				'region' => \Config::get('awsses.defaults.region'),
			);

			$ses = SesClient::factory($awsconfig);
			
			static::$ses = $ses;
		}
		
	}

	/**
	 * Send Method
	 * @return boolean
	 */
	protected function _send() {
		
		$message = $this->build_message();
		
		$data = array(
			'RawMessage' => array(
				'Data' => base64_encode($message['header'] . $message['body']),
			),
		);
		
		$result = static::$ses->sendRawEmail($data);

		return true;
		
	}

}
