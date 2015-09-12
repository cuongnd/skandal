<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 5/20/2015
 * Time: 9:25 AM
 */

class TourModelImagesliders extends JModelList {
    public function __construct($config = array()) {
        if (empty ( $config ['filter_fields'] )) {
            $config ['filter_fields'] = array (
                'id','a.id',
                'title','a.title',
                'path','a.path',
                'type_slider','a.type_slider',


            );
        }
        parent::__construct ( $config );
    }



    protected function populateState($ordering = null, $direction =null)
    {
        $search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
        $this->setState('filter.search', $search);
        $type_slider = $this->getUserStateFromRequest($this->context.'.filter.state', 'filter_state', '', 'string');
        $this->setState('filter.state', $type_slider);
        $categoryId = $this->getUserStateFromRequest($this->context . '.filter.sortTable', 'filter_sortTable');


        $this->setState('filter.category_id', $categoryId);
        parent::populateState('a.id', 'asc');
    }
    protected function getListQuery() {
        $db = $this->getDbo ();
        $query = $db->getQuery ( true );
        $query->select ('a.*' );
        $query->from ( $db->quoteName ( '#__skandal_imageslider' ) . ' AS a' );


        //
        $type_slider = $this->getState('filter.state');
        if ($type_slider && $type_slider !=="all")
        {
            $query->where('a.type_slider = '.'"'.$type_slider.'"');
        }


        // Filter by search in title
        $search = $this->getState('filter.search');
        if (!empty($search))
        {
            if (stripos($search, 'id:') === 0)
            {
                $query->where('a.id = '.(int) substr($search, 3));
            } else {
                $search = $db->Quote('%'.$db->escape($search, true).'%');
                $query->where('(a.title LIKE '.$search.')');
            }
        }
        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');


        $orderDirn = $this->state->get('list.direction');

        if ($orderCol == 'a.ordering')
        {
            $orderCol = 'a.id '.$orderDirn.', a.ordering';
        }
        $query->order($db->escape($orderCol.' '.$orderDirn));

        return $query;
    }

    function getInfoByTypeslider($type_slider){
        $db = $this->getDbo ();
        $query = $db->getQuery ( true );
        $query->select ('a.*' );
        $query->from ( $db->quoteName ( '#__skandal_imageslider' ) . ' AS a' );
        $query->where("a.type_slider=".'"'.$type_slider.'"');
        $db->setQuery($query);
        return $db->loadObjectList();

    }




}