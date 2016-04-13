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
		    users.user_id=tickets.user_id
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
		LEFT JOIN
		    users
		ON 
		    tickets.user_id=users.user_id
	    WHERE
	        tickets.id = ?

	        
	    LIMIT 1;


SQL;


        return $this->fetch ($sql, array ($id));
    }
}