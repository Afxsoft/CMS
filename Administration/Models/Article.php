<?php

namespace Administration\Models;

use Library\Core\Model as MainModel;

class Article extends MainModel {

    protected $table = "article";
    protected $primary = "id";

    public function __construct($cx) {
        parent::__construct($cx);
    }

}
