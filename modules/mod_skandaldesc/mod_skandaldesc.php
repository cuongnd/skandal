<?php
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root() . 'modules/mod_skandaldesc/asset/style.css');
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once

require JModuleHelper::getLayoutPath('mod_skandaldesc');