<?php

namespace Library\Tools;

class Alert {

    /**
     * Function render allows to get the good alert
     * @param type $msg
     * @param type $type(success,info,warning,danger)
     */
    static function render($msg = "", $type = "info") {
        $class = "";
        switch ($type) {
            case "success":
                $class = "alert-success";
                break;
            case "info":
                $class = "alert-info";
                break;
            case "warning":
                $class = "alert-warning";
                break;
            case "danger":
                $class = "alert-danger";
                break;

            default:
                $class = "alert-info";
                break;
        }
        $output = "<div class='msg-alert alert $class' role='alert'><strong>$msg</strong></div>";
        return $output;
    }

}
