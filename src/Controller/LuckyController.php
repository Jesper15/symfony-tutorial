<?php
// src src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController {
    #[Route('/lucky/number')]
    public function number(): Response {
        $number = random_int(1, 100);

        return new Response(
            '<html><body>new number='.$number.'</body></html>'
        );
    }
}