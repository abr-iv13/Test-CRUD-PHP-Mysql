<?php

class CountryModel
{
    public function get()
    {
        return ORM::forTable('countries')->findMany();
    }

    public function update($postItem)
    {
        $country = ORM::forTable('countries')->create();
        $country->name = $postItem;
        $country->save();
        
        return $country;
    }

    public function delete($deleteItem)
    {
        return ORM::forTable('countries')->findOne($deleteItem)->delete();
    }
}
