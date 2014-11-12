<?php

namespace Application\Models;

use Library\Core\Model as MainModel;

class User extends MainModel {

    protected $table = "user";
    protected $primary = "id";

    public function __construct($cx) {
        parent::__construct($cx);
    }
//[TODO]
//    public function updateUser($post, $id) {
//        return $this->update(array(
//                    "nickname" => $nickname,
//                    "mail" => $mail,
//                    "password" => $password,
//                    "id_role" => $role,
//                        ), 'id = ' . $form->id);
//    }

}
