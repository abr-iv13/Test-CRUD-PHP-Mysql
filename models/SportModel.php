<?php

class SportModel
{
    public function get()
    {
        return ORM::forTable('sports')->findMany();
    }

    public function update()
    {
        $newSport = ORM::forTable('sports')->create();
        $newSport->name = $_POST['sport'];
        $newSport->save();

        return $newSport;
    }

    public function delete($sports_item)
    {
        return ORM::forTable('sports')->findOne($sports_item)->delete();
    }
}
