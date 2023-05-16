<?php

namespace App\Controller;

use App\Entity\Stage;
use App\Form\StageType;
use App\Repository\StageRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/Stage')]
class StageController extends AbstractController
{
    #[Route('/', name: 'show_stage')]
    public function index(StageRepository $stageRepo): Response
    {
        $stages = $stageRepo->findAll();
        return $this->render('stage/index.html.twig', ['stages' => $stages]);
    }
    #[Route('/add', name: 'add_stage')]
    public function add(StageRepository $stageRepo): Response
    {
        $stage = new Stage();
        $form = $this->createForm(StageType::class,$stage);
        
        return $this->render('stage/form.html.twig', ['form' => $form]);

    }
}



