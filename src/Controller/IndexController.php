<?php

namespace App\Controller;

use App\Entity\Portfolio;


use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class IndexController extends Controller

{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {

        $repo = $this->getDoctrine()
        ->getRepository(Portfolio::class);

        $projects = $repo->findAll();

        return $this->render('base.html.twig', [
            'controller_name' => 'IndexController',
            'projects' => $projects
        ]);
    }

    /**
     * @Route("/admin")
     */
    public function ajoutProjet(Request $request, ObjectManager $manager)
    {

        $newProjet = new Portfolio();
        
        $form = $this->createFormBuilder($newProjet)
                    ->add('por_title')
                    ->add('por_short_desc')
                    ->add('por_link')
                    ->add('por_long_desc')
                    ->add('por_main_techno')
                    ->add('por_image', FileType::class)

                     ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // $photo récupère le fichier uploadé
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $photo */

            $photo = $form->get('por_image')->getData();

            $photoName = $this->generateUniqueFileName().'.'.$photo->guessExtension();

            // déplace le fichier là où doit êtrs stocké
            $photo->move(
                $this->getParameter('photos_directory'),
                $photoName
            );

            // updates the 'photo' property to store the photo file name
            // instead of its contents

            $newProjet->setPorImage($photoName);

            $manager->persist($newProjet);
            $manager->flush();

        }

        return $this->render('admin.html.twig', [
            'formProjet' => $form->createView(),   
        ]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}

