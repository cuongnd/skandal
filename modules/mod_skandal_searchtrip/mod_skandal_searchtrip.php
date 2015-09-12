<?php
/**
 * Hello World! Module Entry Point
 *
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root() . 'modules/mod_skandal_searchtrip/asset/mod_skandal_searchtrip.css');
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$styleshow = $params->get('styleshow','');

$country = ModskandalsearchtripHelper::getCountry();
$height = ModskandalsearchtripHelper::getHeightLength();

if($styleshow==1){
    require JModuleHelper::getLayoutPath('mod_skandal_searchtrip','default');
}else{
    require JModuleHelper::getLayoutPath('mod_skandal_searchtrip','inline');
}