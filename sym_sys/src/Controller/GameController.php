<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    public function rubick()
    {
        $highscore = array(
            array('place' => 1, 'name' => 'José', 'score' => 5000),
            array('place' => 2, 'name' => 'Max', 'score' => 4700),
            array('place' => 3, 'name' => 'Ebu', 'score' => 4500),
        );

        return $this->render('games/rubick.html.twig', [
            'title' => 'Rubick',
            'links' => array(
                array(
                    'href' => "/rubick/list/score",
                    'name' => "Scoring"
                ),
                array(
                    'class' => "btn",
                    'href' => "#top10",
                    'name' => "Top10"
                ),
                array(
                    'href' => "#highscore",
                    'name' => "Highscoring"
                )
            ),
            'highscore_list' => $highscore
        ]);
    }


    public function tetris()
    {
        $highscore = array();

        return $this->render('games/tetris.html.twig', [
            'title' => 'Tetris',
            'links' => array(
                array(
                    'href' => "/tetris/list/score",
                    'name' => "Scoring"
                ),
                array(
                    'class' => "btn",
                    'href' => "#top10",
                    'name' => "Top10"
                ),
                array(
                    'href' => "#highscore",
                    'name' => "Highscoring"
                )
            ),
            'highscore_list' => $highscore
        ]);
    }
}