<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\Article;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_blog')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();
        /*dump($articles);
        die();*/
        return $this->render('blog/index.html.twig', [
            'articles'=>$articles
        ]);
    }
     #[Route('/article/{id}', name: 'article_show')]
     
    public function show(Article $article)
    {
        return $this->render('blog/show.html.twig',[
            'article'=>$article
        ]);
    }
}

