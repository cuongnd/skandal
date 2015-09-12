<?php
defined ( '_JEXEC' ) or die ();
class TourViewImageslider extends JViewLegacy {
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
        JToolBarHelper::title(JText::_('Add imageslider'), '');
        JToolBarHelper::apply('imageslider.apply');
        JToolbarHelper::save ( 'imageslider.save' );
        if (empty ( $this->item->id )) {
            JToolbarHelper::cancel ( 'imageslider.cancel' );
        } else {
            JToolbarHelper::cancel ( 'imageslider.cancel', 'JTOOLBAR_CLOSE' );
        }
    }
}