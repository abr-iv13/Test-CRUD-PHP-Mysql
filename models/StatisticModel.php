<?php

class StatisticModel
{
    public function get($type_medal)
    {
        $resultMedalsFromCountry = ORM::for_table('medals')
            ->select('medals.id', 'id')
            ->select('medal_types.name', 'medal')
            ->select('countries.name', 'country')
            ->select('countries.id', 'countryId')
            ->select('players.lastname', 'lastname')
            ->select('players.firstname', 'firstname')
            ->select('players.middlename', 'middlename')
            ->select('sports.name', 'sport')
            ->select('sports.id')
            ->select_expr('GROUP_CONCAT(players.lastname SEPARATOR ", ")', 'group_name')
            ->right_outer_join('countries', array('medals.country_id', '=', 'countries.id'))
            ->right_outer_join('players', array('medals.player_id', '=', 'players.id'))
            ->right_outer_join('sports', array('medals.sport_id', '=', 'sports.id'))
            ->right_outer_join('medal_types', array('medals.medal_type_id', '=', 'medal_types.id'));
        if (!empty($type_medal)) {
            $resultMedalsFromCountry->where('medals.medal_type_id', $_GET['type_medal']);
        }
        $resultMedalsFromCountry = $resultMedalsFromCountry->where('countries.id', $_GET['index_country'])
            ->group_by('medals.sport_id')
            ->group_by('medals.medal_type_id')
            ->order_by_asc('medals.medal_type_id')
            ->find_many();

        return $resultMedalsFromCountry;
    }
}
