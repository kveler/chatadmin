<?php
class TicketModel extends EmmaModel {

    public function getAll(){


        $sql = <<<SQL

		SELECT
			*
		FROM
			tickets
        ORDER BY
            id DESC


SQL;


        return $this->fetchAll ($sql);
    }
}