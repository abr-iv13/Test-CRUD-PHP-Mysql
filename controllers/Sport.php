<?php

class Sport extends Controller
{
    public $sports;

    public function __construct()
    {
        parent::__construct();
        $this->sports = new SportModel();
    }
    public function index()
    {
        $resultSports = $this->sports->get();
        $this->smarty->assign('resultSports', $resultSports);
        $this->smarty->display('sports.tpl');
        return true;
    }

    public function store()
    {
        if (isset($_POST['sport']) and !empty($_POST['sport'])) {
            $this->sports->update($_POST['sport']);
            header('Location: /sport/index');
            exit;
        };
        return $this->pageNotFound();
    }

    public function delete()
    {
        if (isset($_GET['delete_item']) and !empty($_GET['delete_item'])) {
            $this->sports->delete($_GET['delete_item']);

            header('Location: /sport/index');
            exit;
        };
        return $this->pageNotFound();
    }
}
