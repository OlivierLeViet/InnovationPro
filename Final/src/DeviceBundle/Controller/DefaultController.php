<?php

namespace DeviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ReviewBundle\Repository\CategoriesRepository;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="menu")
     */
    public function indexAction()
    {
        $categoriesRepository = new CategoriesRepository;
        $categories = $categoriesRepository->findAllCategories();

        return $this->render('DeviceBundle:Default:index.html.twig', [
            'categories' => $categories,
        ]);
    }




    public function testAction()
    {
        return $this->render('DeviceBundle:Default:index.html.twig');
    }
    /**
     * @Route("/")
     */
}
