<?php

namespace Library\Tools;

class Alert
{

    /**
     * Function render allows to get the good alert
     * @param string $msg
     * @param string $type (success,info,warning,danger)
     * @return string $output
     */
    public static function render($msg = "", $type = "info")
    {
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
