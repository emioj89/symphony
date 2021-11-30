<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/category", name="category_")
 */


class CategoryController extends AbstractController
{
/**
 * Undocumented function
 *
 * @return Response
 *
 * @Route("/", name="index")
 */
 public function index(): Response

    {
        $categorys = $this->getDoctrine()
        ->getRepository(Category::class)
        ->findAll();

        return $this->render('category/index.html.twig', ['categorys' => $categorys]);
    }
}
