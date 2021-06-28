<?php

namespace App\Controller\Gite;

use App\Entity\Gite;
use App\Repository\GiteRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GiteController extends AbstractController
{
    private GiteRepository $giteRepository;

    public function __construct(GiteRepository $giteRepository)
    {
        $this->giteRepository = $giteRepository;
    }


    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $gites = $this->giteRepository->findLatestGite();
        return $this->render('home/index.html.twig', [
                'Gites' => $gites
        ]);
    }

    /**
     * @Route("/gites", name="gite.index")
     */
    public function gites()
    {
        $gites = $this->giteRepository->findAll();
        return $this->render('gite/index.html.twig', [
            'gites' => $gites
        ]);
    }


    /**
     * @Route("/gite/{id}", name="gite.show")
     */
    public function show(int $id)
    {
        $gite = $this->giteRepository->find($id);
        // dd($id);

        return $this->render('gite/show.html.twig', [
            "gite" => $gite
        ]);
    }
}
