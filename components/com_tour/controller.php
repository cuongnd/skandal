<?php
defined('_JEXEC') or die;

class TourController extends JControllerLegacy
{
    protected $default_view = 'tours';
    public function display($cachable = false, $urlparams = false){

        $vName   = $this->input->getCmd('view', '');

            switch ($vName)
            {
                    case 'searchtour':
                        JFactory::getApplication()->redirect('index.php?option=com_tour&view=listsearchtour');
                    break;
                default:
//                    $model = $this->getModel('Login');
                    break;
            }

        parent::display($cachable, $urlparams);
    }



}
