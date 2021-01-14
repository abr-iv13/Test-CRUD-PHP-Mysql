<?php

class Router
{
    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', trim($uri, '/'));
        $controller = 'controllers/' . $segments[0] . '.php';
        $models = 'models/' . $segments[0] . 'Model.php';

        if (isset($segments[2])) {
            require_once './controllers/Controller.php';
            $pageNotFoundController = new Controller();
            $pageNotFoundController->pageNotFound();
        }
        if (file_exists($controller)) {
            require_once './controllers/Controller.php';
            require_once $controller;
            require_once $models;
            $classes = new $segments[0];
            if (method_exists($classes, $segments[1])) {
                $classes->{$segments[1]}();
            } else {
                require_once './controllers/Controller.php';
                $pageNotFoundController = new Controller();
                $pageNotFoundController->pageNotFound();
            }
        } elseif (empty($segments[0])) {
            require_once './controllers/Controller.php';
            require_once './controllers/Main.php';
            require_once './models/MainModel.php';
            $main = new Main();
            $main->index();
        } else {
            require_once './controllers/Controller.php';
            $pageNotFoundController = new Controller();
            $pageNotFoundController->pageNotFound();
        }
    }
}
