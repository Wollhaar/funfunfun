<?php
namespace App\Classes\Data;

class Place
{
    private $position;
    private $name;
    private $score;
    private $date;

    public function __construct($position, $name, $score)
    {
        $this->position = $position;
        $this->name = $name;
        $this->score = $score;

        $this->date = time();
    }

    public function getData($data = array())
    {
        if (empty($data)) {
            $data = array
            (
                'position' => $this->position,
                'name' => $this->name,
                'score' => $this->score,
                'date' => $this->date
            );
        }
        elseif (is_array($data)) {
            foreach ($data AS $var) {
                $data[] = $this->$var;
            }
        }
        else {
            $data = $this->$data;
        }

        return $data;
    }
}