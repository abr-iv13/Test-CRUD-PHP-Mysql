<?php

class PlayerModel
{
    public function get()
    {
        return ORM::forTable('players')->findMany();
    }

    public function udpdate($lastName, $firstName, $middleName)
    {
        $newPlayers = ORM::forTable('players')->create();
        $newPlayers->lastname = $lastName;
        $newPlayers->firstname =  $firstName;
        $newPlayers->middlename = $middleName;
        $newPlayers->save();

        return $newPlayers;
    }

    public function delete($deleteItem)
    {
        return ORM::forTable('players')->findOne($deleteItem)
            ->delete();
    }
}
