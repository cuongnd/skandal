<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 6/3/2015
 * Time: 9:29 AM
 */
class ModInfotourdetailModule{
    static function getInfoByIdtour($id){
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select("a.id,a.type,a.groupsize,a.passenger_age,a.service_class,a.grade,a.start_city,a.end_city,
                        b.title as tour_style,
                        c.name as name_startcity,d.name as name_endcity
        ");
        $query->from("#__skandal_tour_details AS a");
        $query->join('inner','#__skandal_tour_style AS b ON b.id=a.idtourstyle');
        $query->join('inner','#__skandal_city AS c ON c.id=a.start_city');
        $query->join('inner','#__skandal_city AS d ON d.id=a.end_city');
        $query->where("a.id=".$id);
        $db->setQuery($query);
        //return $query;
        //$this->setState('list.limit');
        return $db->loadObjectList();
        //$db->execute();


    }
}