<?php

class MedalModel
{
    public function get()
    {
        return ORM::forTable('medals')->select('medals.id', 'id')
            ->select('medal_types.name', 'medal')
            ->select('countries.name', 'country')
            ->select('players.lastname', 'lastname')
            ->select('players.firstname', 'firstname')
            ->select('players.middlename', 'middlename')
            ->select('sports.name', 'sport')
            ->rightOuterJoin('countries', array('medals.country_id', '=', 'countries.id'))
            ->rightOuterJoin('players', array('medals.player_id', '=', 'players.id'))
            ->rightOuterJoin('sports', array('medals.sport_id', '=', 'sports.id'))
            ->rightOuterJoin('medal_types', array('medals.medal_type_id', '=', 'medal_types.id'))
            ->orderByDesc('medals.id')
            ->findMany();
    }

    public function getPlayers()
    {
        return ORM::forTable('players')->findMany();
    }

    public function getSports()
    {
        return ORM::forTable('sports')->findMany();
    }

    public function getCountres()
    {
        return ORM::forTable('countries')->findMany();
    }

    public function getMedalsTypes()
    {
        return ORM::forTable('medal_types')->findMany();
    }

    public function update($selectMedal, $selectCountry, $selectSport, $selectPlayer)
    {
        $newMedals = ORM::forTable('medals')->create();
        $newMedals->medal_type_id = $selectMedal;
        $newMedals->country_id = $selectCountry;
        $newMedals->sport_id =  $selectSport;
        $newMedals->player_id = $selectPlayer;
        $newMedals->save();

        return $newMedals;
    }

    public function delete($deleteItem)
    {
        return ORM::forTable('medals')->findOne($deleteItem)->delete();
    }
}
