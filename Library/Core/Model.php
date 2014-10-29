<?php

namespace Library\Core;
use PDO;

abstract class Model {

    private $db;
    protected $table;
    protected $primary;

    public function __construct($cx) {
        $this->db = $cx;
    }

    /**
     * findById() return all fields selected of an element id
     * @param int $value_primary 
     * @param string $fields
     * @return array
     */
    public function findById($value_primary, $fields = '*') {
        if (!empty($value_primary)) {
            $query = "SELECT $fields FROM `" . $this->table . "` WHERE `" . $this->primary . "`='$value_primary'";
            $sql = $this->db->prepare($query);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_OBJ);

            return $sql->fetchAll();
        }
        return false;
    }

    /**
     * fetchAll() return  all element of table with selected criteria 
     * @param string $where
     * @param string $fields
     * @return array
     */
    public function fetchAll($where = 1, $fields = '*') {
        $query = "SELECT $fields FROM `" . $this->table . "` WHERE $where";
        $sql = $this->db->prepare($query);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_OBJ);
        return $sql->fetchAll();
    }

    /**
     * insert() allows you to add an ocurrence inside table 
     * @param array $data
     * @return boolean
     */
    public function insert($data) {
        $fieldsList = "";
        $valuesList = "";

        foreach ($data as $k => $v) {
            $fieldsList .= "`$k`, ";
            $valuesList .= "'$v', ";
        }

        $fieldsList = substr($fieldsList, 0, -2);
        $valuesList = substr($valuesList, 0, -2);

        $query = "INSERT INTO `" . $this->table . "` ($fieldsList) VALUES ($valuesList)";//http://php.net/manual/fr/pdo.quote.php
        $sql = $this->db->prepare($query);
        return $sql->execute();
    }

    /**
     * Update() allows you to update your data with selected criteria
     * @param array $data
     * @param string $where
     * @return boolean
     */
    public function update($data, $where) {
        if (!empty($where)) {
            $fieldsListAndValue = "";
            foreach ($data as $k => $v) {
                $fieldsListAndValue .= "`$k`='$v', ";
            }
            $fieldsListAndValue = substr($fieldsListAndValue, 0, -2);

            $query = "UPDATE " . $this->table . " SET $fieldsListAndValue WHERE $where";//http://php.net/manual/fr/pdo.quote.php
            $sql = $this->db->prepare($query);
            return $sql->execute();
        }
        return false;
    }

    /**
     * delete() allows you to delete an occurrence of the table with his id
     * @param type $value_primary
     * @return boolean
     */
    public function delete($value_primary) {
        if (!empty($value_primary)) {
            $query = "DELETE FROM `" . $this->table . "` WHERE `" . $this->primary . "`='$value_primary' LIMIT 1";
            $sql = $this->db->prepare($query);
            return $sql->execute();
        }
        return false;
    }

    /**
     * delete() allows you to delete all occurrences
     * @param type $where
     * @return boolean
     */
    public function massDelete($where) {
        if (!empty($where)) {
            $query = "DELETE FROM `" . $this->table . "` WHERE $where";
            $sql = $this->db->prepare($query);
            return $sql->execute();
        }
        return false;
    }

}
