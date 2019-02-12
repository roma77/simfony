<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
	/**
     * @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
     */
    public function list($page = 1)
    {
        // ...'
		// echo $page;
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
	
    public function show($slug)
    {
        // ...
		//  echo $slug;
    }
	
	

}