<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class AlbumController {
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