<?php

defined ( '_JEXEC' ) or die ();
class TourViewTourreviews extends JViewLegacy {

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

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBarHelper::title(JText::_('Tour reviews'), '');
        JToolbarHelper::addNew('tourreview.add');
        JToolbarHelper::editList('tourreview.edit');
        JToolbarHelper::deleteList('', 'tourreviews.delete');

    }


}