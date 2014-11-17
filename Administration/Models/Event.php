<?php

namespace Administration\Models;

use Library\Core\Model as MainModel;

class Event extends MainModel {

    protected $table = "event";
    protected $primary = "id";

    public function __construct($cx) {
        parent::__construct($cx);
    }

}
