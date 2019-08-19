<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('Hommepage page test!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'First comment',
            'Second comment'
        ];
        return $this->render('article/show.html.twig',[
            'title'=> ucwords(str_replace('-', ' ', $slug)),
            'comments'=> $comments
        ]);
    }
}