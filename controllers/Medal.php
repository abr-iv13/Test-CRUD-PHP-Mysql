<?php

class Medal extends Controller
{
    public $medalsModel;

    public function __construct()
    {
        parent::__construct();
        $this->medalsModel = new MedalModel();
    }

    public function index()
    {
        $resultQueryAll = $this->medalsModel->get();

        $resultPlayers = $this->medalsModel->getPlayers();
        $resultCountres = $this->medalsModel->getCountres();
        $resultSports = $this->medalsModel->getSports();
        $resultMedalsTypes = $this->medalsModel->getMedalsTypes();

        $this->smarty->assign('resultQueryAll', $resultQueryAll);
        $this->smarty->assign('resultPlayers', $resultPlayers);
        $this->smarty->assign('resultCountres', $resultCountres);
        $this->smarty->assign('resultSports', $resultSports);
        $this->smarty->assign('resultMedalsTypes', $resultMedalsTypes);
        $this->smarty->display('medals.tpl');
        return true;
    }

    public function store()
    {
        if (isset($_POST['select_medal']) and !empty($_POST['select_medal'])) {
            foreach ($_POST['select_player'] as $select_player) {
                $this->medalsModel->update($_POST['select_medal'], $_POST['select_country'], $_POST['select_sport'], $select_player);
            };
            header('Location: /medal/index');
            exit;
        };
        return $this->pageNotFound();
    }

    public function delete()
    {
        if (isset($_GET['delete_medal']) and !empty($_GET['delete_medal'])) {
            $this->medalsModel->delete($_GET['delete_medal']);
            header('Location: /medal/index');
            exit;
        };
        return $this->pageNotFound();
    }
}
