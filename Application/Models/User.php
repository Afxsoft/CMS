<?php

namespace Application\Models;

use Library\Core\Model as MainModel;

class User extends MainModel {
  
  protected $table = "user";
  protected $primary = "id";
  
  public function __construct($cx) {
    parent::__construct($cx);
  }

}
