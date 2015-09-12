<?php



defined('_JEXEC') or die;

jimport('joomla.application.component.controlleradmin');

class TourControllerSupports extends JControllerAdmin
{
	function  save()
	{
		$app=JFactory::getApplication();
		$id=$app->input->get('id',0,'int');
		$name=$app->input->get('name','','string');
		$number=$app->input->get('number','','string');
		$email=$app->input->get('email','','string');
		JTable::addIncludePath(JPATH_ROOT.'/administrator/components/com_tour/tables');
		$tableSupport=JTable::getInstance('Support','Table');
		$tableSupport->load($id);
		$tableSupport->name=$name;
		$tableSupport->number=$number;
		$tableSupport->email=$email;

		if(!$tableSupport->store())
		{
			echo $tableSupport->getError();
		}

	}
}