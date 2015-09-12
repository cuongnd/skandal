<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 6/3/2015
 * Time: 3:04 PM
 */
class TourModelTourdetail extends JModelList{
    static function getPriceByTourid($id){
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select("a.*");
        $query->from("#__skandal_tour_tariff AS a");
        $query->where("a.idtour=".$id);
        $db->setQuery($query);
        return $db->loadObjectList();
    }

    static function getDailyPriceTour($id){
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query ="SELECT MIN(price) AS minprice FROM #__skandal_tour_tariff where idtour=$id";
        $db->setQuery($query);
        return $db->loadResult();
    }
}