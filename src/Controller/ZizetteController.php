<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ZizetteController extends AbstractController
{
    

    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        $message = "zizette";

        return $this->render('accueil.html.twig',
        [
            'message' => $message
        ]);
    }

    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation()
    {
        $message = "zizette";

        return $this->render('presentation.html.twig',
        [
            'message' => $message
        ]);
    }

    /**
     * @Route("/informations", name="informations")
     */
    public function informations()
    {
        $message = "zizette";

        return $this->render('informations.html.twig',
        [
            'message' => $message
        ]);
    }


}
