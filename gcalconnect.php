<?php
	$gcaluser = 'ieoffices@gmail.com';
	$gcalpass = 'ieguest123';
	require_once 'Zend/Loader.php';
	Zend_Loader::loadClass('Zend_Gdata');
	Zend_Loader::loadClass('Zend_Gdata_AuthSub');
	Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
	Zend_Loader::loadClass('Zend_Gdata_Calendar');
	
	$service = Zend_Gdata_Calendar::AUTH_SERVICE_NAME; // predefined service name for calendar
	$client = Zend_Gdata_ClientLogin::getHttpClient($gcaluser,$gcalpass,$service);
?>