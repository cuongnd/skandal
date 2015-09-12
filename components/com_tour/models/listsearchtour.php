<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 5/29/2015
 * Time: 11:06 AM
 */
class TourModelListsearchtour extends JModelList{


    function getListTour(){
        require_once JPATH_ROOT.'/administrator/components/com_tour/models/tours.php';
        $model=new TourModelTours();
        $data=$model->getItems();
        foreach( $data as $i => $row ) {
            $data[$i]->name = $row->name;
            $data[$i]->highlight = $row->highlight;
            $data[$i]->type = $row->type;
            $data[$i]->grade = $row->grade;
            $data[$i]->length = $row->length;
            $data[$i]->code = $row->code;
         }
        return $data;

    }




    function getListTourByDestinationAndLenght($dest_id="",$leg="",$name=""){
//        $db = JFactory::getDBO();
//        $query = $db->getQuery(true);
//        $query->from('#__skandal_tour_details AS tour');
//        $query->select("tour.*");
//        $query->leftJoin('#__skandal_city AS city ON city.id=tour.start_city');
//        $query->leftJoin('#__skandal_city AS city1 ON city1.id=tour.end_city');
//        $query->leftJoin('#__skandal_country AS country ON country.id=city.idcountry');
//        $query->leftJoin('#__skandal_country AS country1 ON country1.id=city1.idcountry');
//        $query->where('country.id='.(int)$dest_id);
//        $query->where('tour.length='.(int)$leg);
//        $db->setQuery($query);
//        echo $query->dump();
//        $data= $db->loadObjectList();
//return $data;
//
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select("a.id");
        $query->from("#__skandal_city as a");
        if($dest_id !=""){
            $query->where("a.idcountry=".$dest_id);
        }
        $db->setQuery($query);
        $data= $db->loadColumn();
        $data=implode('","',$data);
        $data='("'.$data.'")';
        $query2 = $db->getQuery(true);
        $query2->select("b.*");
        $query2->from("#__skandal_tour_details as b");
        if($leg != "" && $name !=""){
            $query2->where("b.length=$leg AND b.start_city IN $data AND b.name='$name' ", "OR");
            $query2->where("b.length=$leg AND b.end_city IN $data AND b.name='$name' " );
        }else if($leg =="" && $name !=""){
            $query2->where("b.start_city IN $data AND b.name='$name' ", "OR");
            $query2->where("b.end_city IN $data AND b.name='$name' " );
        }else if($leg !="" && $name ==""){
            $query2->where("b.start_city IN $data AND b.length=$leg ", "OR");
            $query2->where("b.end_city IN $data AND b.length=$leg " );
        }
        $db->setQuery($query2);
        $data2= $db->loadObjectList();
        return $data2;
    }

}