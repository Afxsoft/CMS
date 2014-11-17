<?php

namespace Administration\Models;

use Library\Core\Model as MainModel;

class Slide extends MainModel {

    protected $table = "slide";
    protected $primary = "id";

    public function __construct($cx) {
        parent::__construct($cx);
    }

}
