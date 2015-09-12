<?php

// No direct access
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root() . 'modules/mod_skandal_feedback/asset/style.css');
require JModuleHelper::getLayoutPath('mod_skandal_feedback');