<?php
namespace model\Classes\Data;

use Data\Place as Place;
use model\Controller\DataController as DataController;

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
            $list_id = date('Ymd_His') . '-' . uniqid();

        $this->list_id = $list_id;
        $this->score_list = $this->getAll();

        $this->Datamanager = new DataController($list_id);
    }

    public function getAll()
    {
        $datalist = is_a($this->Datamanager, 'DataController') ? $this->Datamanager->getData() : array();

        $position_list = array();
        foreach ($datalist as $row) {
            $position_list[] = new Place($row[0], $row[1], $row[2]);
        }

        return $position_list;
    }

    public function getTopTen()
    {
        $topTen = array();

        if (empty($this->score_list) && is_a($this->Datamanager, 'DataController')) {
            $this->score_list = $this->Datamanager->getData();
        }

        if (is_array($this->score_list) && count($this->score_list) > 0) {
            $topTen_list = array_slice($this->score_list, 0, 10, true);
            foreach ($topTen_list as $place => $data) {
                $topTen[] = new Place($place, $data[1], $data[2]);
            }
        }

        return $topTen;
    }
}