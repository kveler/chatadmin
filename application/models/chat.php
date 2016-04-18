<?php
class ChatModel extends EmmaModel {
    public function getAll(){
        $sql = <<<SQL

		SELECT
			*
		FROM
			chat
        ORDER BY
            id DESC


SQL;


        return $this->fetchAll ($sql);
    }

    public function countAll(){
        $sql = <<<SQL

		SELECT
			COUNT(*) AS allez
		FROM
			chat


SQL;


        return $this->fetch ($sql);
    }

}