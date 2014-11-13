<?php

namespace Application\Models;

use Library\Core\Model as MainModel;

class User extends MainModel {

    protected $table = "user";
    protected $primary = "id";

    public function __construct($cx) {
        parent::__construct($cx);
    }
    /**
     * [TODO]
     * @param type $post
     * @param type $id
     * @return type
     */
    public function updateUser($post, $id) {
        return $this->update(array(
                    "nickname" => $post['nickname'],
                    "mail" => $post['mail'],
                    "password" =>  $post['password'],
                    "id_role" => $post['role'],
                        ), 'id = ' . $id);
    }
    /**
     * [TODO]
     * @param type $post
     * @return type
     */
    public function insertUser($post){
      return  $this->insert(array(
                    "nickname" => $post['nickname'],
                    "mail" => $post['mail'],
                    "password" => md5($post['password']),
                    "id_role" => $post['role'],
                ));
    }
    /**
     * [TODO]
     * @param type $name
     * @return type
     */
    public function getUserByName($name){
      return $this->fetchAll("nickname= '$name' ");
    }
    /**
     * [TODO]
     * @param type $mail
     * @return type
     */
    public function getUserByMail($mail){
      return $this->fetchAll("mail= '$mail' ");
    }
    /**
     * [TODO]
     * @param type $name
     * @param type $password
     */
    public function getUserLogin($login,$password){
      return $this->fetchAll("nickname='$login' and password='$password' ");
    }

}
