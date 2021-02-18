<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $links = array();

        return $this->render('default/dashboard.html.twig', [
            'title' => 'Dashboard',
            'content' => 'Lorem Ipsum Dolores',
            'links' => $links
        ]);
    }
    public function impressum()
    {
        $links = array();

        return $this->render('default/impressum.html.twig', [
            'title' => 'Impressum',
            'content' => 'Lorem Ipsum Dolores',
            'links' => $links
        ]);
    }
    public function contact()
    {
        $links = array();

        return $this->render('default/contact.html.twig', [
            'title' => 'Kontakt',
            'content' => 'Lorem Ipsum Dolores',
            'links' => $links
        ]);
    }
    public function faq()
    {
        $links = array();

        return $this->render('default/faq.html.twig', [
            'title' => 'FAQ',
            'content' => 'Lorem Ipsum Dolores',
            'links' => $links
        ]);
    }
}