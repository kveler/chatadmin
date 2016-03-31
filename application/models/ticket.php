<?php
class TicketModel extends EmmaModel {

    public function getAll(){


        $sql = <<<SQL

		SELECT
			*
		FROM
			tickets
		ORDER BY
		    solved ASC



SQL;


        return $this->fetchAll ($sql);
    }
}