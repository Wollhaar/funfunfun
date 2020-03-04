<?php


class Highscore
{
    private $list_id;
    private $list_name;
    private $score_type;
    private $score_list = array();

    public function __construct($list_name, $score_type, $list_id = null)
    {
        $this->list_name = $list_name;
        $this->score_type = $score_type;

        if(empty($list_id))
            $list_id = uniqid();

        $this->list_id = $list_id;
        $this->score_list = $this->getAll();

        $this->Datamanager = new DataController($list_id);
    }

    public function getAll() {
        $this->Datamanager->getData();

        return array();
    }
}