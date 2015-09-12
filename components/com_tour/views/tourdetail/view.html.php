<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

use Joomla\Registry\Registry;
class TourViewTourdetail extends JViewLegacy
{

    public function display($tpl = null)
    {

        JModelLegacy::addIncludePath(JPATH_ROOT.'/administrator/components/com_tour/models');
        $model= JModelLegacy::getInstance('Tour','TourModel');

        $id = JRequest::getInt('id', 0);
        $this->data=$model->getItem($id);

        $this->dataprice=TourModelTourdetail::getPriceByTourid($id);
        $this->dailyprice=TourModelTourdetail::getDailyPriceTour($id);


        parent::display($tpl);
    }


}




