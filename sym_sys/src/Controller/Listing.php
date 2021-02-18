<?php


namespace App\Controller;


use App\Classes\Data\Highscore;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Listing extends AbstractController
{
    public function score(): Response
    {
//        $highscore = new Highscore($game, 'time');
//        if($_GET['highscore'] == 'all') $highscore_list = $highscore->getAll();
//        else $highscore_list = $highscore->getTopTen();
        return $this->render('lists/scorelist.html.twig', [
            'title' => 'Scorelist',
            'score' => '11113586 pkt'
        ]);
    }
}