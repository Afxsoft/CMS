<?php

namespace Library\Tools;

class Alert {

  /**
   * Function render allows to get the good alert
   * @param type $msg
   * @param type $type(success,info,warning,danger)
   */
  static function render($msg = "",$type="info") {
    $class = get_class_name($type);
    $output = "<div class='alert $class' role='alert'><strong>$msg</strong></div>";
    return $output;
  }

  function get_class_name($type) {
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
    return $class;
  }

}
