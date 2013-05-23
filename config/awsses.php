<?php

return array(

	'defaults' => array(
		// developer key
		'key' => 'PLEASE SET DEVELOPER KEY HERE',
		// developer secret key
		'secret' => 'PLEASE SET SECRET KEY HERE',
		'region' => \Aws\Common\Enum\Region::US_EAST_1,
	),

	// Default setup group
	'default_setup' => 'default',

	// Setup groups
	'setups' => array(
		'default' => array(),
	),

);