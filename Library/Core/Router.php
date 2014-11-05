<?php

namespace Library\Core;

/**
 * [ Main controller]
 */
class Router {

    protected $source_root;
    protected $source_link;

    public function __construct() {
        //
    }

    /**
     * dispatch_page($url).
     * This method allows the manage link 
     * @param array $url
     */
    public function dispatch_page($url, $type = 'front') {
        $controller = (string) ($this->get_controller_class_name("index"));

        $action = $this->get_action_name("index");
        if (!empty($url[0])) {
            if (file_exists($this->get_controller_path($url[0])) && class_exists($this->get_controller_class_name($url[0]))) {
                $controller = $this->get_controller_class_name($url[0]);
                array_splice($url, 0, 1);
            } else {
                $controller = $this->get_controller_class_name("_404");
            }
        }
        $controller = new $controller;

        if (!empty($url[0])) {

            if (method_exists($controller, $this->get_action_name($url[0]))) {
                $action = $this->get_action_name($url[0]);
            }
            array_splice($url, 0, 1);
        }

        call_user_func_array(array($controller, $action), $url);
        call_user_func(array($controller, "render_view"), array("controller" => get_class($controller), "action" => $action, "type" => $type));
    }

    /**
     * get_controller_class_name($ctrl)
     * This method allows retrieve the name of the class is a controller
     * @param string $ctrl
     * @return string
     */
    private function get_controller_class_name($ctrl) {
        return $this->source_link . ucfirst(strtolower($ctrl));
    }

    /**
     * get_controller_class_name($ctrl)
     * This method allows retrieve the path
     * @param string $ctrl
     * @return string
     */
    private function get_controller_path($ctrl) {
        return $this->source_root . "Controllers/" . ucfirst(strtolower($ctrl)) . ".php";
    }

    /**
     * get_action_name($act).
     * This method allows retrieve the name of the action
     * @param type $act
     * @return type
     */
    private function get_action_name($act) {
        return strtolower($act) . "Action";
    }

}
