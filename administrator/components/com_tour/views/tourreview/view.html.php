<?php
defined ( '_JEXEC' ) or die ();
class TourViewTourreview extends JViewLegacy {
    protected $item;
    protected $form;
    public function display($tpl = null) {

        $this->item = $this->get ( 'Item' );


        $this->form = $this->get ( 'Form' );

        if (count ( $errors = $this->get ( 'Errors' ) )) {
            JError::raiseError ( 500, implode ( "\n", $errors ) );
            return false;
        }
        $this->addToolbar ();

        parent::display ( $tpl );
    }
    protected function addToolbar() {
        JFactory::getApplication ()->input->set ( 'hidemainmenu', true );
        JToolBarHelper::title(JText::_('Add tour reviews'), '');
        JToolBarHelper::apply('tourreview.apply');
        JToolbarHelper::save ( 'tourreview.save' );
        if (empty ( $this->item->id )) {
            JToolbarHelper::cancel ( 'tourreview.cancel' );
        } else {
            JToolbarHelper::cancel ( 'tourreview.cancel', 'JTOOLBAR_CLOSE' );
        }
    }
}