<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/program", name="program_")
 */


class ProgramController extends AbstractController
{

    /**
     * @return Response
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     *
     * @param integer $id
     * @return Response
     * @Route("/{id<\d+>}", methods={"GET"}, name="show")
     */
    public function show(int $id): Response
    {
        return $this->render('program/show.html.twig',  ['id' => $id]);
    }
}
