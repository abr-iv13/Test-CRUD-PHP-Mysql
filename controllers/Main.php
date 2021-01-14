<?php

class Main extends Controller
{
    public $mainModel;

    public function __construct()
    {
        parent::__construct();
        $this->mainModel = new MainModel();
    }

    public function index()
    {
        $sort_list = array(
            'rank_desc' => 'gold DESC, silver DESC, bronze DESC',
            'rank_asc' => 'gold ASC, silver ASC, bronze ASC, country ASC',
            'country_desc' => 'country DESC',
            'country_asc' => 'country',
            'gold_desc' => 'gold DESC',
            'gold_asc' => 'gold',
            'silver_desc' => 'silver DESC',
            'silver_asc' => 'silver',
            'bronze_desc' => 'bronze DESC',
            'bronze_asc' => 'bronze',
            'all_medals_desc' => 'all_medals DESC',
            'all_medals_asc' => 'all_medals',
        );
        if (isset($_GET['sort']) and !empty($_GET['sort'])) {
            $sort =  $_GET['sort'];
            if (array_key_exists($sort, $sort_list)) {
                $sort_sql = $sort_list[$sort];
            }
        };

        $sortDefaultSql = isset($sort_sql) ? $sort_sql : " gold DESC, silver DESC, bronze DESC";

        $resultSumMedals = $this->mainModel->getSort($sortDefaultSql);
        $resultSumMedalsGoldenSort = $this->mainModel->getSumMedalsGoldenSort();

        //Индексация списка стран по местам.
        $newArray = array();
        foreach ($resultSumMedalsGoldenSort as $dataKey => $dataValue) {
            $newArray[$dataValue["country_id"]] = $dataKey + 1;
        };

        $this->smarty->assign('resultSumMedals', $resultSumMedals);
        $this->smarty->assign('resultSumMedalsGoldenSort', $resultSumMedalsGoldenSort);
        $this->smarty->assign('newArray', $newArray);
        $this->smarty->display('index.tpl');
        return true;
    }
}
