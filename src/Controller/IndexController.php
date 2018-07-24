<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Portfolio;

class IndexController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        $id = '1';

        $repo = $this->getDoctrine()
        ->getRepository(Portfolio::class);

        $projects = $repo->findAll();

        return $this->render('base.html.twig', [
            'controller_name' => 'IndexController',
            'projects' => $projects
        ]);
    }
}

