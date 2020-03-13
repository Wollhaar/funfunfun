<?php
namespace model\Controller;

class DataController
{
    private $file_id;
    private $data;

    public function __construct($data_id, $wr = 'write')
    {
        $this->file_id = $data_id;

        $path = $_SERVER['DOCUMENT_ROOT'] . '/storage/data/highscore/';

        if(!is_dir($path))
            $this->create_directories($path);

        $file = $path . $data_id;
        if (!file_exists($file))
            $file_exists= $this->createNewFile($file);
        else $file_exists = true;

        return $file_exists;
    }

    private function createNewFile($file_id, $run = 0)
    {

        $handle = fopen($file_id, 'x');
        if(file_exists($file_id)) {
            fclose($handle);
            return true;
        }
        elseif ($run < 5) {
            $run++;
            $this->createNewFile($file_id, $run);
        }
        else
            return false;

        return null;
    }

    private function writeIntoFile($file, Array $data)
    {
        if (file_exists($file)) {
            $stream = true;
            $handle = fopen($file, 'w');

            foreach ($data AS $string) {
                $stream = fwrite($handle, $string);
                if (!$stream) break;
            }

            fclose($handle);
            return $stream;
        }

        return null;
    }

    private function readFile($file)
    {
        if (file_exists($file)) {
            $data = array();
            $handle = fopen($file, 'r');

            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                $data[] = $row;
            }
            fclose($handle);
            return $this->data = $data;
        }

        return null;
    }

    public function getData() {
        return $this->readFile($this->file_id);
    }

    public function create_directories($directories)
    {
        $str_arr = explode($directories, '/');
        foreach ($str_arr as $part => $str) {
            if (!is_dir($str)) {
                mkdir($str);
            }
        }
    }
}