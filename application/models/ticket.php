<?php
class TicketModel extends EmmaModel {

    public function getAll(){


        $sql = <<<SQL

		SELECT
			*
		FROM
			tickets
		INNER JOIN
		    users
		ON 
		    tickets.user_id=users.id
		ORDER BY
		    solved ASC



SQL;


        return $this->fetchAll ($sql);
    }

    public function get($id){
        $sql = <<<SQL

		SELECT
			*
		FROM
			tickets
	    WHERE
	        id = ?
	        
	    LIMIT 1;


SQL;


        return $this->fetch ($sql, array ($id));
    }
}