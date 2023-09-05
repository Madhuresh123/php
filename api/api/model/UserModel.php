<?php
require_once PROJECT_ROOT_PATH . "/model/Database.php";
class UserModel extends Database
{
    public function getUsers($limit)
    {
        return $this->select("SELECT * FROM validated-form ORDER BY S.no ASC LIMIT ?", ["i", $limit]);
    }
}