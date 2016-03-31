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

    public function getOperators(){
        $sql = <<<SQL

		SELECT
			*
		FROM
			users
        WHERE
            rechten=1


SQL;


        return $this->fetchAll ($sql);
    }
}