<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;

class PostController extends AbstractController
{
    #[Route('/post', name: 'app_post')]
    public function index(): Response
    {
        //on creer deux objets article1 et article2
        $id=1;
        $title="Les Chats : Des Animaux Fascinants";
        $content= "Les chats sont des animaux fascinants avec une personnalité unique.
        Ils sont connus pour leur indzpendance et leur amour propre,
        mais aussi pour leur capacité a apporter de la joie et de la compagnie a leur propriétaire.
        Si vous envisagez d'adopter un chat, il est important de comprendre leurs besoins et leur ...";
        $author="Meriem Hnida";
        $created_at="2023-03-01";
        $updated_at="2023-03-01";
        $article1=new Post($id, $title, $content, $author, $created_at, $updated_at);

        $id=2;
        $title="Les abeilles  : des pollinisaeurs indispensables";
        $content= "Les abeilles sont des insectes fascinants qui jouent un role crucial dans ...";
        $author="Ali Alami";
        $created_at="2023-03-01";
        $updated_at="2023-03-01";
        $article2=new Post($id, $title, $content, $author, $created_at, $updated_at);

        $posts=array($article1, $article2);
        return $this->render('post/index.html.twig', [
            //'article1' => $article1, 'article2'=> $article2,
            'posts' => $posts
        ]);
    }
}
