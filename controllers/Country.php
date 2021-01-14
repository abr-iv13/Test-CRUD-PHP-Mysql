<?php

class Country extends Controller
{
    public $countryModel;

    public function __construct()
    {
        parent::__construct();
        $this->countryModel = new CountryModel();
    }
    public function index()
    {
        $resultCountres = $this->countryModel->get();
        $this->smarty->assign('resultCountres', $resultCountres);
        $this->smarty->display('country.tpl');
        return true;
    }

    public function store()
    {
        if (isset($_POST['country']) and !empty($_POST['country'])) {
            $this->countryModel->update($_POST['country']);
            header('Location: /country/index');
            exit;
        };
        return $this->pageNotFound();
    }

    public function delete()
    {
        if (isset($_GET['delete_country']) and !empty($_GET['delete_country'])) {
            $this->countryModel->delete($_GET['delete_country']);
            header('Location: /country/index');
            exit;
        };
        return $this->pageNotFound();
    }
}
