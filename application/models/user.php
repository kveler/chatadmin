<?php
class UserModel extends EmmaModel {
    public function getAll(){
        $sql = <<<SQL

		SELECT
			*
		FROM
			users
        ORDER BY
            user_id DESC


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
	        user_id = ?
	        
	    LIMIT 1;


SQL;


        return $this->fetch ($sql, array ($id));
    }

}