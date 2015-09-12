<?php

defined ( '_JEXEC' ) or die ();
require_once JPATH_ROOT.'/administrator/components/com_tour/models/tour.php';
class TourViewGalleries extends JViewLegacy {

    protected $items;
    protected $state;
    protected $pagination;
    public function display($tpl=null){
        TourHelper::addSubmenu('tour');

        $this->items = $this->get('Items');
        $this->state = $this->get('State');
        $this->pagination = $this->get('Pagination');

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

        $this->addToolbar();
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title(JText::_('City'), '');
        JToolbarHelper::addNew('gallery.add');
        JToolbarHelper::editList('gallery.edit');
        JToolbarHelper::deleteList('', 'galleries.delete');
    }
}