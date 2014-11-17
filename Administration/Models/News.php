<?php

namespace Administration\Models;

use Library\Core\Model as MainModel;

class News extends MainModel {

    protected $table = "news";
    protected $primary = "id";

    public function __construct($cx) {
        parent::__construct($cx);
    }

}
