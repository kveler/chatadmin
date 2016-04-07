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

    public function get($id){
        $sql = <<<SQL

		SELECT
			*
		FROM
			users
	    WHERE
	        id = ?
	        
	    LIMIT 1;


SQL;


        return $this->fetch ($sql, array ($id));
    }

}