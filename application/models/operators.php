<?php
class OperatorsModel extends EmmaModel {
    public function getAll(){
        $sql = <<<SQL

		SELECT
			*
		FROM
			operators
        ORDER BY
            id DESC


SQL;


        return $this->fetchAll ($sql);
    }

}