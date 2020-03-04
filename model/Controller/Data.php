<?php


class DataController
{
    private $file_id;
    private $data;

    public function __construct($data_id)
    {
        $this->file_id = $data_id;

        $path = $_SERVER['DOCUMENT_ROOT'] . '/storage/data/';
        if(!is_dir($path))
            mkdir($path);

        $file = fopen($data_id, 'w+');
    }

    public function getData() {

    }
}