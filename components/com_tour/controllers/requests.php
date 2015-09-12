<?php



defined('_JEXEC') or die;

jimport('joomla.application.component.controlleradmin');

class TourControllerRequests extends JControllerAdmin
{
	function  save()
	{
		$app=JFactory::getApplication();
		$name=$app->input->get('name','','string');
		$number=$app->input->get('number','','string');
		$email=$app->input->get('email','','string');
		$type=$app->input->get('type','','string');
		$post = JRequest::get('post');
		echo '<pre>';
		print_r($post);
		echo '</pre>';
		die;





		JTable::addIncludePath(JPATH_ROOT.'/administrator/components/com_tour/tables');
		$tableRequest=JTable::getInstance('Request','Table');
		$tableRequest->name=$name;
		$tableRequest->number=$number;
		$tableRequest->email=$email;
		$tableRequest->type=$type;
		if(!$tableRequest->store())
		{
			echo $tableRequest->getError();
		}

	}
}