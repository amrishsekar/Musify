<?php

require 'controller/UserController.php';

class router
{
    public $routes;
    public $controller;

    public function __construct()
    {
        $this->controller = new UserController();
    }

    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST',
        ];
    }

    public function route()
    {
        foreach ($this->routes as $route)
        {
            if ($route['uri'] === $_SERVER['REQUEST_URI'])
            {

                $action = $route['controller'];

                switch ($action)
                {
                    case "main":
                        $this->controller->index();
                        break;
                    case "check":
                        $this->controller->loginRender();
                        break;
                    case "checkUser":
                        $this->controller->checkUser($_POST);
                        break;
                    case "adminHome":
                        $this->controller->adminRender();
                        break;
                    case "userHome":
                        $this->controller->userRender();
                        break;
                    case "addSongDetails":
                        $this->controller->createSong($_POST,$_FILES);
                        break;
                    case "listingAllUsers":
                        $this->controller->usersList();
                        break;
                    case "allSongs":
                        $this->controller->songsList();
                        break;
                    case "searchSongs":
                        $this->controller->searchSongs($_POST);
                        break;
                    case "searchArtists":
                        $this->controller->searchArtist($_POST);
                        break;
                    default:
                        $this->controller->index();
                }
                $arr['controller'] =  $route['controller'];
            }

        }
//        if(empty($arr['controller'])){
//            require 'error.php';
//        }
    }
}