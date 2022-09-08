<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class AlbumController extends AbstractController {

    #[Route('/')]
    public function homepage(): Response {

        $tracks = [
            ['song' => 'Come around again', 'artist' => 'Armin van Buuren'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        return $this->render('albums/index.html.twig', [
            'title' => 'Songs',
            'tracks' => $tracks,
        ]);
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response {

        if($slug) {
            $title = 'Genre: ' .  u(str_replace('-', ' ', $slug))->title(true);
        } else {
            return new Response("Alle genres:");
        }

    return new Response($title);
    }
}