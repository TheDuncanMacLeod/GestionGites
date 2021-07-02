<?php

namespace App\Controller\Gite;

use App\Entity\Contact;
use App\Entity\Gite;
use App\Entity\GiteSearch;
use App\Form\ContactType;
use App\Form\GiteSearchType;
use App\Notification\ContactNotification;
use App\Repository\GiteRepository;
use Symfony\Component\HttpFoundation\Request;
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
    public function gites(Request $request)
    {
        $search = new GiteSearch();
        $form = $this->createForm(GiteSearchType::class, $search);
        $form->handleRequest($request);

        $gites = $this->giteRepository->findAllGiteSearch($search);

        return $this->render('gite/index.html.twig', [
            'gites' => $gites,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/gite/{id}", name="gite.show")
     */
    public function show(int $id, Request $request, ContactNotification $notification)
    {
        
        $gite = $this->giteRepository->find($id);
        
        $contact = new Contact();
        $contact->setGite($gite);
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $notification->notify($contact);
            
            $this->addFlash("success" , "Votre email a bien été envoyé");
            return $this->redirectToRoute('gite.show',[
                'id' =>$gite->getId(),
            ]);
        }


        dump($contact);
        return $this->render('gite/show.html.twig', [
            "gite" => $gite,
            "form" => $form->createView()
        ]);
    }
}
