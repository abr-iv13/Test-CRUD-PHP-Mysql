<?php

class MainModel
{
    public function default()
    {
        return ORM::for_table('countries')
            ->select('countries.name', 'country')
            ->select('medals.country_id', 'country_id')
            ->selectExpr('IFNULL(SUM(medals.medal_type_id=1), 0)', 'gold')
            ->selectExpr('IFNULL(SUM(medals.medal_type_id=2), 0)', 'silver')
            ->selectExpr('IFNULL(SUM(medals.medal_type_id=3), 0)', 'bronze')
            ->selectExpr('COUNT(medals.medal_type_id)', 'all_medals')
            ->leftOuterJoin('medals', array('countries.id', '=', 'medals.country_id'))
            ->groupBy('countries.id');
    }

    public function getSort($sortDefaultSql)
    {
        $default = $this->default()
            ->orderByExpr($sortDefaultSql)
            ->findMany();

        return $default;
    }

    public function getSumMedalsGoldenSort()
    {
        $sortCountries = $this->default()
            ->orderByDesc('gold')
            ->orderByDesc('silver')
            ->orderByDesc('bronze')
            ->findMany();

        return $sortCountries;
    }
}
