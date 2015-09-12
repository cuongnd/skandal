<?php

/**
 * @package 	Bookpro
 * @author 		Ngo Van Quan
 * @link 		http://joombooking.com
 * @copyright 	Copyright (C) 2011 - 2012 Ngo Van Quan
 * @license 	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @version 	$Id: view.html.php 26 2012-07-08 16:07:54Z quannv $
 **/

defined('_JEXEC') or die;
require_once JPATH_ROOT.'/administrator/components/com_tour/models/tour.php';
class TourViewGallery extends JViewLegacy {

	protected $form;
	protected $item;
	protected $state;

	/**
	 * (non-PHPdoc)
	 * @see JViewLegacy::display()
	 */
	public function display($tpl = null) {

		$input=JFactory::getApplication()->input;
		 
		 
		$this->form 	= $this->get('Form');
		$this->item 	= $this->get('Item');
		$this->state 	= $this->get('State');
		$this->addToolbar();
		$this->type 	= JFactory::$application->input->get('type');
		$this->tour_id	= JFactory::$application->input->get('tour_id');
		$this->city_id	= JFactory::$application->input->get('city_id');


		if(!$this->tour_id){
			$this->tour_id	= JFactory::getApplication()->getUserState('com_tour.galleries.filter.tour_id');
		}else{
			JFactory::getApplication()->setUserState('com_tour.galleries.filter.tour_id',$this->tour_id);
		}
		if(!$this->city_id){
			$this->city_id	= JFactory::getApplication()->getUserState('com_tour.galleries.filter.city_id');
		}else{
			JFactory::getApplication()->setUserState('com_tour.galleries.filter.city_id',$this->city_id);
		}
		if(!$this->type){
			$this->type		= JFactory::getApplication()->getUserState('com_tour.galleries.filter.type');
		}else{
			JFactory::getApplication()->setUserState('com_tour.galleries.filter.type',$this->type);
		}
		$tourModel		= new TourModelTour();
		$this->tour		= $tourModel->getItem( $this->tour_id);
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @since	1.6
	 */
	protected function addToolbar() {
		JRequest::setVar('hidemainmenu', true);
		JToolbarHelper::title ( $this->item->id?JText::_ ( 'COM_BOOKPRO_EDIT_GALLERY' ):JText::_ ( 'COM_BOOKPRO_NEW_GALLERY' ));
		JToolBarHelper::apply('gallery.apply');
		JToolBarHelper::save('gallery.save');
		JToolBarHelper::cancel('gallery.cancel');
	}

}