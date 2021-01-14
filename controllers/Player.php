<?php

class Player extends Controller
{
    public $players;
    
    public function __construct()
    {
        parent::__construct();
        $this->players = new PlayerModel();
    }
    public function index()
    {
        $resultPlayers = $this->players->get();
        $this->smarty->assign('resultPlayers', $resultPlayers);
        $this->smarty->display('players.tpl');
        return true;
    }

    public function store()
    {
        if (isset($_POST['add_last_name']) and !empty($_POST['add_last_name'])) {
            $this->players->udpdate($_POST['add_last_name'], $_POST['add_first_name'], $_POST['add_middle_name']);
            header('Location: /player/index');
            exit;
        };
        return $this->pageNotFound();
    }

    public function delete()
    {
        if (isset($_GET['delete']) and !empty($_GET['delete'])) {
            $this->players->delete($_GET['delete']);
            header('Location: /player/index');
            exit;
        };
        return $this->pageNotFound();
    }
}
