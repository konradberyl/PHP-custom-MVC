<?php

class Routes
{
    private $module        = "main";
    private $controller    = "Main";
    private $action        = "home";
    private $controllerEnd = "Controller";

    /**
     * basic routing method
     * @throws Exception
     */
    public function route()
    {

        try {

            $this->setBasicRoute();

            $path = 'modules/'.$this->module."/controller/".$this->controller.$this->controllerEnd.".php";

            if (!is_file($path)) {
                throw new NotFoundException("Cannot route path that you typed!");
            }

            include $path;

            $className = $this->getClassName($path);

            if (!class_exists($className, false)) {
                throw new NotFoundException("Cannot find resource with that name!");
            }

            $class = new $className();

            if (!method_exists($class, $this->action)) {
                throw new NotFoundException("Cannot find method action with that name!");
            }

            $method = $this->action;

            $class->$method();
        } catch (NotFoundException $ex) {
            $ex->errorMessage();
            return;
        }
    }

    /**
     * Convert $_GET to MVC structure
     */
    private function setBasicRoute()
    {
        if (isset($_GET['module']) && !empty($_GET['module'])) {
            $this->module = $_GET['module'];
        }
        if (isset($_GET['controller']) && !empty($_GET['controller'])) {
            $this->controller = ucfirst($_GET['controller']);
        }
        if (isset($_GET['action']) && !empty($_GET['action'])) {
            $this->action = $_GET['action'];
        }
    }

    /**
     * Get full class name
     * @param string $path
     * @return string
     */
    private function getClassName($path)
    {
        $name = ucfirst($this->module)."_".$this->controller.$this->controllerEnd;

        return $name;
    }
}
$routes = new Routes();
$routes->route();
