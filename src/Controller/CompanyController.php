<?php
// src/Controller/CompanyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{
    /**
     * @Route({
     *     "nl": "/over-ons",
     *     "en": "/about-us"
     * }, name="about_us")
     */
    public function about()
    {
       
		
		return new Response(
            '<html><body>Lucky number: about_us</body></html>'
        );
    }
}