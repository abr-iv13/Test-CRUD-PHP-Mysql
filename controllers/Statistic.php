<?php

class Statistic extends Controller
{
    public $statisticsModel;

    public function __construct()
    {
        parent::__construct();
        $this->statisticsModel = new StatisticModel();
    }

    public function index()
    {
        $resultMedalsFromCountry = $this->statisticsModel->get($_GET['type_medal']);
        $this->smarty->assign('resultMedalsFromCountry', $resultMedalsFromCountry);
        $this->smarty->display('statistics.tpl');
        return true;
    }
}
