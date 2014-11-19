<?php

namespace Administration\Models;

use Library\Core\Model as MainModel;

class Role extends MainModel {

    protected $table = "role";
    protected $primary = "id";

    public function __construct($cx) {
        parent::__construct($cx);
    }

}
