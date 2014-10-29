<?php

namespace Library\Core;

/**
 * [ Main Controller ]
 */
class Controller {

    protected $source_root;
    protected $source_link;
    private $layout = "default";
    private $responseHeader = "text/html";
    private $vars = array(
        "viewSiteName" => "",
        "viewTile" => "",
        "viewDescription" => "",
        "alert" => "",
    );

    public function __construct() {
        //
    }

    /**
     * render_view($i).
     * This method displays the Result of the view of a controller
     * @param array $i
     */
    public function render_view($i) {

        extract($i);

        $pathViews = $this->source_root . "Views/Controllers/" . str_replace($this->source_link, "", $controller) . "/" . str_replace("Action", "", $action) . ".php";
        var_dump($pathViews);
        if (file_exists($pathViews)) {

            header("Content-type: " . $this->responseHeader . ";charset=UTF-8");
            extract($this->vars);

            ob_start();
            include_once $pathViews;
            $viewContent = ob_get_clean();

            ob_start();


            include_once $this->source_root . "Views/Layouts/" . $this->get_layout() . ".tpl.php";
            $finaleRender = ob_get_clean();

            echo $finaleRender;
        } elseif (!empty($_SERVER['HTTP_REFERER'])) {
            header("location :" . $_SERVER['HTTP_REFERER']);
            die();
        } else {
            header("location :", LINK_ROOT);
            die();
        }
    }

    /**
     * get_layout()
     * This method allows retrieve the layout
     * @return string
     */
    protected function get_layout() {
        return $this->layout;
    }

    /**
     * set_responseHeader($value)
     * This method adds the required headers
     * @param type $value03f04f2ef5b98d5d646c93355e4ffb3d32c8626f
     */
    protected function set_responseHeader($value) {
        $possibility = array(
            "txt"  => "text/plain",
            "html" => "text/html",
            "css"  => "text/css",
            "js"   => "application/javascript",
            "json" => "application/json",
            "xml"  => "application/xml",
        );
        if (array_key_exists(strtolower($value), $possibility)) {
            $this->responseHeader = $possibility[$value];
        }
    }

    /**
     * add_data_view($data)
     * This method allows to add variables to the view
     * @param array $data
     */
    public function add_data_view($data) {
        $this->vars = array_merge($this->vars, $data);
    }

    /**
     * Function set_layout() put a layout.
     * @param type $layout
     */
    public function set_layout($layout) {
        $layout_file_path = APP_ROOT . "Views/Layouts/" . $layout . ".tpl.php";
        if ((file_exists($layout_file_path))) {
            $this->layout = $layout;
        } else {
            die('Layout' . $layout . 'not exist');
        }
        $this->layout = $layout;
    }

}
