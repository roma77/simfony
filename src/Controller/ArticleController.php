<?php
// src/Controller/ArticleController.php
namespace App\Controller;
// ...
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function show($_locale, $year, $slug)
    {
		return new Response(
            '<html><body>Articles: locale '.$_locale.'
			</br>
			Articles: year '.$year.'
			</br>
			Articles: slug '.$slug.'
			</body></html>'
        );
		
    }
}