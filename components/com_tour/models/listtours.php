<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 5/29/2015
 * Time: 11:06 AM
 */
class TourModelListTours extends JModelList{

    function getListTourByDestinationAndLenght($dest_id="",$leg="",$name=""){
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select("c.id");
        $query->from("#__skandal_city as c");
        if($dest_id !=""){
            $query->where("c.idcountry=".$dest_id);
        }
        $db->setQuery($query);
        $data= $db->loadColumn();
        $data=implode('","',$data);
        $data='("'.$data.'")';

        $query2 = $db->getQuery(true);
        $query2->select("t.*,g.path");
        $query2->from("#__skandal_tour_details as t");
        $query2->leftJoin('#__skandal_gallery as g ON g.tour_id = t.id');
        $query2->leftJoin('#__skandal_tour_tariff as tariff ON tariff.idtour = t.id');
        $query2->select('MIN(tariff.price) AS tour_price' );
        $query2->order('tariff.price');
        $query2->group('t.id');

        if($leg != "" && $name !=""){
            $query2->where("t.length=$leg AND t.start_city IN $data AND t.name='$name' ", "OR");
            $query2->where("t.length=$leg AND t.end_city IN $data AND t.name='$name' " );
        }else if($leg =="" && $name !=""){
            $query2->where("t.start_city IN $data AND t.name='$name' ", "OR");
            $query2->where("t.end_city IN $data AND t.name='$name' " );
        }else if($leg !="" && $name ==""){
            $query2->where("t.start_city IN $data AND t.length=$leg ", "OR");
            $query2->where("t.end_city IN $data AND t.length=$leg " );
        }else{
            $query2->where("t.start_city IN $data OR t.end_city IN $data ");
        }
        $db->setQuery($query2);
        $data2= $db->loadObjectList();

/*        foreach( $data2 as $i => $row ) {
            $data2[$i]->link = JRoute::_('index.php?option=com_tour&view=tourdetail&id='.$data2[$i]->id.'&Itemid=143);
        }*/

        return $data2;
    }

}