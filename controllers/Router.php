<?php
    require_once('views/view.php');
    class Router{
       
        private $_ctrl;
        private $_view;

        public function routeReq(){
            try {
                //Chargement automatique des classes
                spl_autoload_register(function($class){
                    require_once('models/'.$class.'.php');
                });

                $url[] = '';
                //Inclusion du controller selon l'action de l'utilisateur
                if(isset($_GET['url'])){
                    $url = explode('/', filter_var($_GET['url']), FILTER_SANITIZE_URL);
                    $controller = ucfirst(strtolower($url[0]));
                    $controllerClass = 'Controller'.$controller;
                    $controllerFile = 'controllers/'.$controllerClass.'.php';

                    if(file_exists($controllerFile)){
                        require_once($controllerFile);
                        $this->_ctrl =new $controllerClass($url);
                    }else
                        throw new Exception('Page introuvable');
                }
                else{
                    require_once("controllers/ControllerHome.php");
                    $this->_ctrl = new ControllerHome($url);
                }
                //Gestion des erreurs/Exceptions
            } catch (Exception $ex) {
                $errorMessage = $ex->getMessage();
                require_once ('views/error.php');
            }
        }
    }