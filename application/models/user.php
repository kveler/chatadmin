<?php
class UserModel extends EmmaModel {
    public function getAll(){
        $sql = <<<SQL

		SELECT
			*
		FROM
			users
        ORDER BY
            id DESC


SQL;


        return $this->fetchAll ($sql);
    }
}