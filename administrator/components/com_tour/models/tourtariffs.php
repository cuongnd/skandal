<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 5/20/2015
 * Time: 9:25 AM
 */

class TourModelTourtariffs extends JModelList {
    public function __construct($config = array()) {
        if (empty ( $config ['filter_fields'] )) {
            $config ['filter_fields'] = array (
                'id','a.id',

                'datefrom', 'a.datefrom',
                'dateto', 'a.dateto',

            );
        }
        parent::__construct ( $config );
    }



    protected function populateState($ordering = null, $direction =null)
    {
        $search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
        $this->setState('filter.search', $search);

        $idtour=$this->getUserStateFromRequest($this->context . '.filter.idtour', 'idtour', '', 'int');
        $this->setState('filter.idtour', $idtour);

        parent::populateState('a.id', 'asc');
    }
    protected function getListQuery() {
        $db = $this->getDbo ();
        $query = $db->getQuery ( true );
        $query->select ('a.*' );
        $query->from ( $db->quoteName ( '#__skandal_tour_tariff' ) . ' AS a' );

        // Filter by search in title
        $search = $this->getState('filter.search');
        if (!empty($search))
        {
            if (stripos($search, 'id:') === 0)
            {
                $query->where('a.id = '.(int) substr($search, 3));
            } else {
                $search = $db->Quote('%'.$db->escape($search, true).'%');
                $query->where('(a.datefrom LIKE '.$search.' OR a.dateto LIKE'.$search.')');
            }
        }
        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');


        $orderDirn = $this->state->get('list.direction');

        $idtour=$this->state->get('filter.idtour');
        if ($idtour){
            $query->where('a.idtour =' .$idtour);
        }

        if ($orderCol == 'a.ordering')
        {
            $orderCol = 'a.id '.$orderDirn.', a.ordering';
        }
        $query->order($db->escape($orderCol.' '.$orderDirn));
        return $query;
    }

}