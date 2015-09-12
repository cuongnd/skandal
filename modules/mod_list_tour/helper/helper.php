<?php


// no direct access
defined('_JEXEC') or die;
//require_once JPATH_ROOT.'/administrator/components/com_tour/helpers/image.php';

class modListTourHelper {

    static function getListTour(){
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('t.*,g.path');
        $query->from('#__skandal_tour_details as t');
        $query->leftJoin('#__skandal_gallery as g ON g.tour_id = t.id');
        $query->leftJoin('#__skandal_tour_tariff as tariff ON tariff.idtour = t.id');
        $query->select('MIN(tariff.price) AS tour_price' );
        $query->order('tariff.price');
        $query->group('t.id');
        $db->setQuery($query);
        $data = $db->loadObjectList();

        foreach( $data as $i => $row ) {
            $data[$i]->link = JRoute::_('index.php?option=com_tour&view=tourdetails&id='.$data[$i]->id);
        }
        return $data;

    }



}
?>