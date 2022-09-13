<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[route('/api/songs/{id}')]
    public function getSong($id): Response {
        $song = [
            'id' => $id,
            'name' => 'Come around again',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        return new JsonResponse($song);
    }
}