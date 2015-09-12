<?php
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root() . 'modules/mod_skandaltoptour/asset/css/style.css');
$document->addScript(JURI::root() . 'modules/mod_skandaltoptour/asset/js/js.js');

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
//require_once dirname(__FILE__) . '/helper.php';

//$hello = modHelloWorldHelper::getHello($params);
require JModuleHelper::getLayoutPath('mod_skandaltoptour');