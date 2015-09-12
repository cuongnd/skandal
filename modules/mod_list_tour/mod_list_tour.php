<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
require_once (dirname(__FILE__).'/helper/helper.php');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// using setting params
$iheight 		= 	$params->get( 'iheight', 80 );
$iwidth 		= 	$params->get( 'iwidth', 80 );

$listtour = modListTourHelper::getListTour($params);

require JModuleHelper::getLayoutPath('mod_list_tour', $params->get('layout', 'default'));
