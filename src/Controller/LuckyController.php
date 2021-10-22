<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController 
{ /** 
    * @Route ("/lucky/number")
    */


    public function number(): Response
    {
        $number = random_int(0, 100);

        /*return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );*/

        return $this->render('lucky/lucky.html.twig', [
            'number' => $number,
        ]);
    }
}

/* twig islemi icin bu 3 ayri yorum satirlari kaldirilmalidir */