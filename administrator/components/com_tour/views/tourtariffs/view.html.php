<?php

defined ( '_JEXEC' ) or die ();
require_once JPATH_ROOT.'/administrator/components/com_tour/models/tour.php';
class TourViewTourtariffs extends JViewLegacy {

    protected $items;
    protected $state;
    protected $pagination;
    public function display($tpl=null){
         TourHelper::addSubmenu('tour');

        $this->items = $this->get('Items');

        $this->state = $this->get('State');
        $this->pagination = $this->get('Pagination');
        $this->addToolbar();
        $this->sidebar = JHtmlSidebar::render();

        $this->idtour	= JFactory::$application->input->get('idtour');
        if(!$this->idtour){
            $this->idtour	= JFactory::getApplication()->getUserState('com_tour.tourtariffs.filter.idtour');
        }else{
            JFactory::getApplication()->setUserState('com_tour.tourtariffs.filter.idtour',$this->idtour);
        }

        $tourModel		= new TourModelTour();
        $this->tour		= $tourModel->getItem( $this->idtour);

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title(JText::_('Tour tariffs'), '');
        JToolbarHelper::addNew('tourtariff.add');
        JToolbarHelper::editList('tourtariff.edit');

        JToolbarHelper::deleteList('', 'tourtariffs.delete');
    }


}