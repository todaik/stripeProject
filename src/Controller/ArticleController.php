<?php
/**
 * Created by PhpStorm.
 * User: wbarl
 * Date: 21/03/2019
 * Time: 17:37
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! WOOO!');
    }

    /**
     * @Route("/news")
     */
    public function homepagebis()
    {
        return new Response('<html><body>OMG!  WOOO!</body></html>');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the article: "%s"',
            $slug
        ));
    }
}