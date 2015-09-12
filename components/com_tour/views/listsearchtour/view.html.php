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

class TourViewListsearchtour extends JViewLegacy
{

    public function display($tpl = null)
    {
        $post = JRequest::get('post');




        $model= new TourModelListsearchtour();
        $this->listtour=$model->getListTourByDestinationAndLenght($post['select-destination'],(int)$post['select-length'],$post['keywords-search']);


      parent::display($tpl);
    }


}
