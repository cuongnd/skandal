<?php
defined ( '_JEXEC' ) or die ();
require_once JPATH_ROOT.'/administrator/components/com_tour/models/tour.php';
class TourViewTourtariff extends JViewLegacy {
    protected $item;
    protected $form;
    public function display($tpl = null) {
        $this->item = $this->get ( 'Item' );
        $this->form = $this->get ( 'Form' );
        if (count ( $errors = $this->get ( 'Errors' ) )) {
            JError::raiseError ( 500, implode ( "\n", $errors ) );
            return false;
        }
        $this->idtour	= JFactory::$application->input->get('idtour');
        if(!$this->idtour){
            $this->idtour	= JFactory::getApplication()->getUserState('com_tour.tourtariffs.filter.idtour');
        }else{
            JFactory::getApplication()->setUserState('com_tour.tourtariffs.filter.idtour',$this->idtour);
        }

        $tourModel		= new TourModelTour();
        $this->tour		= $tourModel->getItem( $this->idtour);

        $this->addToolbar ();
        parent::display ( $tpl );
    }
    protected function addToolbar() {
        JFactory::getApplication ()->input->set ( 'hidemainmenu', true );
        JToolBarHelper::title(JText::_('Add tour tariff'), '');
        JToolBarHelper::apply('tourtariff.apply');
        JToolbarHelper::save ( 'tourtariff.save' );
        if (empty ( $this->item->id )) {
            JToolbarHelper::cancel ( 'tourtariff.cancel' );
        } else {
            JToolbarHelper::cancel ( 'tourtariff.cancel', 'JTOOLBAR_CLOSE' );
        }
    }
}