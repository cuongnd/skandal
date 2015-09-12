<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 6/2/2015
 * Time: 10:12 AM
 */
class ModSlidertourHelper {
    static function getListImageById($id){
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select ('a.*' );
        $query->from ( $db->quoteName ( '#__skandal_gallery' ) . ' AS a' );
        $query->where('a.tour_id='.$id);
        $db->setQuery($query);
        return $db->loadObjectList();
    }
}