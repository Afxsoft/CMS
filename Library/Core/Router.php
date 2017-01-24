<?php

namespace Library\Core;

/**
 * [ Main controller]
 */
class Router
{

    protected $source_root;
    protected $source_link;

    public function __construct()
    {
    }

    /**
     * dispatchPage($url).
     * This method allows the manage link
     * @param array $url
     */
    public function dispatchPage($url, $type = 'front')
    {
        $controller = (string)($this->getControllerClassName("index"));

        $action = $this->getActionName("index");
        if (!empty($url[0])) {
            if (file_exists($this->getControllerPath($url[0])) &&
                class_exists($this->getControllerClassName($url[0]))
            ) {
                $controller = $this->getControllerClassName($url[0]);
                array_splice($url, 0, 1);
            } else {
                $controller = $this->getControllerClassName("_404");
            }
        }
        $controller = new $controller;

        if (!empty($url[0])) {
            if (method_exists($controller, $this->getActionName($url[0]))) {
                $action = $this->getActionName($url[0]);
            }
            array_splice($url, 0, 1);
        }

        call_user_func_array(array($controller, $action), $url);
        call_user_func(
            array(
                $controller,
                "renderView",
            ),
            array(
                "controller" => get_class($controller),
                "action" => $action,
                "type" => $type,
            )
        );
    }

    /**
     * getControllerClassName($ctrl)
     * This method allows retrieve the name of the class is a controller
     * @param string $ctrl
     * @return string
     */
    private function getControllerClassName($ctrl)
    {
        return $this->source_link . ucfirst(strtolower($ctrl));
    }

    /**
     * getControllerClassName($ctrl)
     * This method allows retrieve the path
     * @param string $ctrl
     * @return string
     */
    private function getControllerPath($ctrl)
    {
        return $this->source_root . "Controllers/" . ucfirst(strtolower($ctrl)) . ".php";
    }

    /**
     * getActionName($act).
     * This method allows retrieve the name of the action
     * @param type $act
     * @return type
     */
    private function getActionName($act)
    {
        return strtolower($act) . "Action";
    }

}
