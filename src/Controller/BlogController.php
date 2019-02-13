<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
	/**
     * Matches /blog exactly
     *
# * @Route("/blog", name="blog_list")
# * @Route("/blog/{page<\d+>}", name="blog_list")
	 * @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
     */
	 
    public function list($page = 1)
    {
        // ...'
		// echo $page;
		return new Response(
            '<html><body>Lucky number: blog_list '.$page.'</body></html>'
        );
    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
	
    public function show($slug)
    {
        // ...
		//  echo $slug;
		return new Response(
            '<html><body>Lucky number: blog_show</body></html>'
        );
    }
	
	

}